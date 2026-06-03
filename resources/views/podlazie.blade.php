@extends('layouts.info')
@section('content')
<div class="relative w-full min-h-screen bg-white overflow-hidden">

    <div class="absolute inset-0 opacity-[0.08] pointer-events-none
        bg-[linear-gradient(#000_1px,transparent_1px),linear-gradient(90deg,#000_1px,transparent_1px)]
        bg-[size:40px_40px]">
    </div>

    <div class="absolute bottom-0 left-0 right-0 z-20 px-6 py-4 flex justify-between items-center text-white">
        <div class="hidden md:block text-sm uppercase tracking-widest text-black/60 font-[DMMono]">
            ARCHITEKTÚRNY POHĽAD
        </div>

        <div class="text-black font-[DMMono] uppercase text-xs md:text-sm">
           Budova: {{$floorModel->building->name}} / Poshodie: {{ $floorModel->floor_number}}
        </div>
        
    </div>

    <div class="relative w-full h-screen overflow-hidden touch-none">
        <div id="viewport"
            class="absolute inset-0 flex items-center justify-center overflow-hidden
            cursor-grab active:cursor-grabbing touch-none">
            <div id="floor-wrapper"
                class="relative w-fit mx-auto transition-transform duration-300 ease-out">

                @includeIf('components.floor-svg.' . $floorView)
            </div>
        </div>
    </div>

    <div id="apartment-panel"
        class="fixed bottom-20 translate-y-1/2 right-1/2 translate-x-1/2 
        hidden z-50 w-[320px]
        bg-[#333333]
        text-white p-6 shadow-2xl">

        <div class="flex flex-col gap-2 w-full">
            <div class="flex items-center justify-between w-full">

                <h3 id="panel-name"
                    class="text-xl font-semibold leading-tight truncate max-w-[70%]">
                </h3>

                <span class="flex items-center gap-2 text-xs uppercase tracking-wider text-white/60">
                    STAV:
                    <div id="panel-status"
                        class="text-sm font-semibold mb-0.5">
                    </div>
                </span>

            </div>

            <div class="flex items-center justify-between">

                <span class="text-white/60 uppercase text-sm">Rozloha:</span><p id="panel-area" class="text-sm text-white90"></p>

            </div>

        </div>
        <p class="text-white text-sm  mt-4 mb-1">Pre viac informácií nás prosím kontaktujte.</p>
        <p class="text-white text-xs font-semibold">Mária Stesňáková | +421 919 391 361</p> 
        <p class="text-white text-xs font-semibold">Peter Reištetter | +421 918 540 042</p>
    </div>


</div>

<style>
    
</style>
<script>
document.addEventListener('DOMContentLoaded', () => {

    const viewport = document.getElementById('viewport');
    const wrapper = document.getElementById('floor-wrapper');
    const zones = document.querySelectorAll('.zone');

    const panel = document.getElementById('apartment-panel');

    const nameEl = document.getElementById('panel-name');
    const areaEl = document.getElementById('panel-area');
    const statusEl = document.getElementById('panel-status');

    // -------------------------
    // STATE
    // -------------------------

    let scale = window.innerWidth < 768 ? 1 : 0.78;

    let posX = 0;
    let posY = 0;

    let isDragging = false;

    let startX = 0;
    let startY = 0;

    let dragDistance = 0;

    // -------------------------
    // STATUS MAP
    // -------------------------

    const statusMap = {
        free: {
            text: "Voľný",
            class: "text-green-300"
        },

        occupied: {
            text: "Predaný",
            class: "text-red-400"
        },

        reserved: {
            text: "Rezervovaný",
            class: "text-yellow-300"
        }
    };

    // -------------------------
    // RENDER
    // -------------------------

    function render() {

        wrapper.style.transform =
            `translate(${posX}px, ${posY}px) scale(${scale})`;

    }

    render();

    // -------------------------
    // POINTER EVENTS
    // -------------------------

    viewport.addEventListener('pointerdown', (e) => {

        isDragging = true;

        dragDistance = 0;

        startX = e.clientX - posX;
        startY = e.clientY - posY;

        viewport.style.cursor = 'grabbing';

    });

    window.addEventListener('pointermove', (e) => {

        if (!isDragging) return;

        const nextX = e.clientX - startX;
        const nextY = e.clientY - startY;

        dragDistance += Math.abs(nextX - posX);
        dragDistance += Math.abs(nextY - posY);

        posX = nextX;
        posY = nextY;

        render();

    });

    window.addEventListener('pointerup', () => {

        isDragging = false;

        viewport.style.cursor = 'grab';

    });

    // -------------------------
    // ZOOM
    // -------------------------

    viewport.addEventListener('wheel', (e) => {

        e.preventDefault();

        const delta = e.deltaY > 0 ? -0.1 : 0.1;

        scale += delta;

        scale = Math.max(0.5, Math.min(scale, 2));

        render();

    }, { passive: false });

    // -------------------------
    // APARTMENTS
    // -------------------------

    zones.forEach(zone => {

        zone.addEventListener('click', (e) => {

            e.stopPropagation();

            // ignore click after drag
            if (dragDistance > 8) return;

            const rect = zone.getBoundingClientRect();

            const centerX = window.innerWidth / 2;
            const centerY = window.innerHeight / 2;

            const zoneCenterX = rect.left + rect.width / 2;
            const zoneCenterY = rect.top + rect.height / 2;

            posX += centerX - zoneCenterX;
            posY += centerY - zoneCenterY;

            scale = 1.2;

            render();

            // -------------------------
            // PANEL
            // -------------------------

            const name = zone.dataset.name;
            const area = zone.dataset.area;
            const status = zone.dataset.status;

            const s = statusMap[status] || statusMap.free;

            nameEl.textContent = name;

            areaEl.textContent =
                area ? `${area} m²` : '';

            statusEl.innerHTML = `
                <span class="${s.class}">
                    ${s.text}
                </span>
            `;

            panel.classList.remove('hidden');

            // -------------------------
            // HIGHLIGHT
            // -------------------------

            zones.forEach(z => {

                z.style.opacity =
                    z === zone ? '1' : '0.2';

            });

            setTimeout(() => {

                zones.forEach(z => {
                    z.style.opacity = '1';
                });

            }, 1500);

        });

    });

    // -------------------------
    // CLOSE PANEL
    // -------------------------

    window.addEventListener('click', (e) => {

        if (
            !panel.contains(e.target) &&
            !e.target.closest('.zone')
        ) {

            panel.classList.add('hidden');

        }

    });

});

</script>