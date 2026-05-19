@extends('layouts.info')
@section('content')
<div class="relative w-full min-h-screen bg-white overflow-hidden">

    {{-- Blueprint background --}}
    <div class="absolute inset-0 opacity-[0.08] pointer-events-none
        bg-[linear-gradient(#000_1px,transparent_1px),linear-gradient(90deg,#000_1px,transparent_1px)]
        bg-[size:40px_40px]">
    </div>

    {{-- Top HUD --}}
    <div class="absolute bottom-0 left-0 right-0 z-20 px-6 py-4 flex justify-between items-center text-white">
        <div class="text-sm uppercase tracking-widest text-black/60 font-[DMMono]">
            ARCHITEKTÚRNY POHĽAD
        </div>

        <div class="text-black font-[DMMono] uppercase text-sm">
           Budova: {{$floorModel->building->name}} / Poshodie: {{ $floorModel->floor_number}}
        </div>
        
    </div>

    {{-- Main SVG container --}}
    <div class="relative w-full h-full overflow-hidden">
    
        <div id="viewport"
            class="absolute inset-0 cursor-grab active:cursor-grabbing">

            <div id="floor-wrapper"
                class="relative w-fit mx-auto transition-transform duration-300 ease-out scale-[0.78]">

                @includeIf('components.floor-svg.' . $floorView)

            </div>


        </div>

    </div>

    {{-- Floating tooltip (HUD style) --}}
    <div id="apartment-panel"
        class="fixed top-1/2 right-0 -translate-y-1/2
        hidden z-50 w-[320px]
        bg-white/10 backdrop-blur-2xl border border-white/20
        text-white p-6 shadow-2xl">

        <div class="flex justify-between items-start mb-4">

            <div>
                <h3 id="panel-name" class="text-xl font-semibold"></h3>
                <p id="panel-area" class="text-sm text-white/60"></p>
            </div>

            <button id="panel-close"
                    class="text-white/60 hover:text-white text-lg">
                ✕
            </button>

        </div>

        <div id="panel-status" class="text-sm mb-4"></div>
    </div>


</div>
<script>
document.addEventListener('DOMContentLoaded', () => {

    const viewport = document.getElementById('viewport');
    const wrapper = document.getElementById('floor-wrapper');

    const zones = document.querySelectorAll('.zone');

    // MINI MAP
    const minimap = document.getElementById('minimap');
    const viewportBox = document.getElementById('viewport-box');

    let scale = 0.78;
    let posX = 0;
    let posY = 0;

    let isDragging = false;
    let startX, startY;

    // ------------------------
    // PAN (drag move)
    // ------------------------
    viewport.addEventListener('mousedown', (e) => {
        isDragging = true;
        startX = e.clientX - posX;
        startY = e.clientY - posY;
    });

    window.addEventListener('mouseup', () => {
        isDragging = false;
    });

    window.addEventListener('mousemove', (e) => {
        if (!isDragging) return;

        posX = e.clientX - startX;
        posY = e.clientY - startY;

        applyTransform();
    });

    // ------------------------
    // ZOOM
    // ------------------------
    viewport.addEventListener('wheel', (e) => {

        e.preventDefault();

        const zoomIntensity = 0.1;

        if (e.deltaY < 0) {
            scale += zoomIntensity;
        } else {
            scale -= zoomIntensity;
        }

        scale = Math.min(Math.max(0.5, scale), 2);

        applyTransform();
    });

    function applyTransform() {
        wrapper.style.transform =
            `translate(${posX}px, ${posY}px) scale(${scale})`;

        updateMinimap();
    }

    // ------------------------
    // FOCUS MODE (click apartment)
    // ------------------------
    zones.forEach(zone => {

        zone.addEventListener('click', (e) => {

            e.stopPropagation();

            const rect = zone.getBoundingClientRect();

            const centerX = window.innerWidth / 2;
            const centerY = window.innerHeight / 2;

            const zoneRect = zone.getBoundingClientRect();

            const offsetX = centerX - (zoneRect.left + zoneRect.width / 2);
            const offsetY = centerY - (zoneRect.top + zoneRect.height / 2);

            posX += offsetX;
            posY += offsetY;

            // zoom in focus
            scale = 1.3;

            applyTransform();

            // highlight selected
            zones.forEach(z => {
                z.style.opacity = (z === zone) ? '1' : '0.2';
                z.style.transition = '0.3s';
            });

            setTimeout(() => {
                zones.forEach(z => z.style.opacity = '1');
            }, 2000);

            const url = zone.dataset.url;
            if (url) {
                // optional: delay navigation
                // setTimeout(() => window.location.href = url, 300);
            }
        });

    });

    // ------------------------
    // MINIMAP
    // ------------------------
    function updateMinimap() {

        const scaleFactor = 0.2;

        viewportBox.style.width = (window.innerWidth * scaleFactor / scale) + 'px';
        viewportBox.style.height = (window.innerHeight * scaleFactor / scale) + 'px';

        viewportBox.style.transform =
            `translate(${(-posX * scaleFactor / scale)}px, ${(-posY * scaleFactor / scale)}px)`;
    }

    // init
    applyTransform();

});
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {

    const zones = document.querySelectorAll('.zone');

    const panel = document.getElementById('apartment-panel');
    const closeBtn = document.getElementById('panel-close');
    const openBtn = document.getElementById('panel-open');

    const nameEl = document.getElementById('panel-name');
    const areaEl = document.getElementById('panel-area');
    const statusEl = document.getElementById('panel-status');

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

    let currentUrl = null;

    zones.forEach(zone => {

        zone.addEventListener('click', (e) => {
            e.stopPropagation();

            const name = zone.dataset.name;
            const area = zone.dataset.area;
            const status = zone.dataset.status;
            const url = zone.dataset.url;

            currentUrl = url;

            const s = statusMap[status] || statusMap.free;

            nameEl.textContent = name;
            areaEl.textContent = area ? `${area} m²` : '';

            statusEl.innerHTML = `
                <span class="${s.class} uppercase tracking-wider">
                    ${s.text}
                </span>
            `;

            panel.classList.remove('hidden');
        });

    });

    // close panel
    closeBtn.addEventListener('click', () => {
        panel.classList.add('hidden');
    });

    // open apartment page
    openBtn.addEventListener('click', () => {
        if (currentUrl) {
            window.location.href = currentUrl;
        }
    });

    // click outside closes panel
    window.addEventListener('click', (e) => {
        if (!panel.contains(e.target)) {
            panel.classList.add('hidden');
        }
    });

});
</script>