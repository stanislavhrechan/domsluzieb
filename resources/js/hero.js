document.addEventListener('DOMContentLoaded', () => {

    // ========================
    // ПЕРЕКЛЮЧЕНИЕ ЗДАНИЙ
    // ========================

    const desktop = [
        document.getElementById('heroDesktopA'),
        document.getElementById('heroDesktopB')
    ];

    const mobile = [
        document.getElementById('heroMobileA'),
        document.getElementById('heroMobileB')
    ];

    const btn = document.getElementById('buildingBtn');

    let current = 0;

    const labels = [
        'POZRIEŤ Dom služieb II',
        'POZRIEŤ Dom služieb I'
    ];

    function switchBuilding() {

        const isMobile = window.innerWidth < 768;
        const activeSet = isMobile ? mobile : desktop;

        activeSet[current].classList.remove('active');

        current = (current + 1) % activeSet.length;

        activeSet[current].classList.add('active');

        btn.textContent = labels[current];
    }

    if (btn) {

        btn.addEventListener('click', switchBuilding);

        let autoSwitch = setInterval(switchBuilding, 15000);

        btn.addEventListener('click', () => {
            clearInterval(autoSwitch);
            autoSwitch = setInterval(switchBuilding, 15000);
        });
    }

    // ========================
    // PANEL APARTMENTS
    // ========================

    const zones = document.querySelectorAll('.hero-zone');
    const panel = document.getElementById('apartment-panel');

    const nameEl = document.getElementById('panel-name');
    const floorEl = document.getElementById('panel-floor');
    const areaEl = document.getElementById('panel-area');
    const statusEl = document.getElementById('panel-status');

    const statusMap = {
        free: {
            text: 'Voľné',
            class: 'text-green-300 uppercase font-[DMMono] text-sm hidden'
        },
        reserved: {
            text: 'Rezervované',
            class: 'text-yellow-300 uppercase font-[DMMono] text-sm hidden'
        },
        sold: {
            text: 'Predané',
            class: 'text-red-400 uppercase font-[DMMono] text-sm hidden'
        }
    };

    const isTouch = window.innerWidth < 768;

    let currentUrl = null;
    let activeZone = null;

    zones.forEach(zone => {

        if (!isTouch) {
            zone.addEventListener('mouseenter', () => {
                panel.classList.add('active');
            });
        }

        // MOBILE
        if (isTouch) {

            zone.addEventListener('click', () => {

                const name = zone.dataset.name;
                const floor = zone.dataset.floor;
                const area = zone.dataset.area;
                const status = zone.dataset.status;
                const url = zone.dataset.url;

                const s = statusMap[status] || statusMap.free;

                if (activeZone === zone) {
                    window.location.href = url;
                    return;
                }

                activeZone = zone;

                nameEl.textContent = name;
                floorEl.textContent = floor;
                areaEl.textContent = area;

                statusEl.textContent = s.text;
                statusEl.className = s.class;

                panel.classList.add('active');

                panel.style.left = '50%';
                panel.style.bottom = '120px';
                panel.style.top = 'auto';
                panel.style.transform = 'translateX(-50%)';

                zones.forEach(z => z.style.filter = '');
                zone.style.filter =
                    'drop-shadow(0 0 18px rgba(34,197,94,.65))';
            });
        }

        // DESKTOP
        if (!isTouch) {

            zone.addEventListener('mousemove', (e) => {

                const name = zone.dataset.name;
                const floor = zone.dataset.floor;
                const area = zone.dataset.area;
                const status = zone.dataset.status;
                const url = zone.dataset.url;

                currentUrl = url;

                const s = statusMap[status] || statusMap.free;

                nameEl.textContent = name;
                floorEl.textContent = floor;
                areaEl.textContent = area;

                statusEl.textContent = s.text;
                statusEl.className = s.class;

                panel.style.left = `${e.clientX + 24}px`;
                panel.style.top = `${e.clientY - 40}px`;

                zone.style.filter =
                    'drop-shadow(0 0 18px rgba(34,197,94,.65))';
            });

            zone.addEventListener('click', () => {
                if (currentUrl) {
                    window.location.href = currentUrl;
                }
            });
        }

        zone.addEventListener('mouseleave', () => {
            panel.classList.remove('active');
            zone.style.filter = '';
            currentUrl = null;
        });
    });

    document.addEventListener('click', (e) => {

        if (!e.target.closest('.hero-zone')) {

            activeZone = null;

            panel.classList.remove('active');

            zones.forEach(z => {
                z.style.filter = '';
            });
        }
    });

});