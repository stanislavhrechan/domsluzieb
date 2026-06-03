@props(['buildings' => []])
<section class="relative w-full min-h-screen overflow-hidden">
    <div class="absolute inset-0">
        <svg id="heroDesktopA"  class="hero-svg active hidden md:block" preserveAspectRatio="xMidYMid slice" viewBox="0 150 1536 1524" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <image 
            href="./images/bg_1.webp"
            class="animate-heroReveal"
            />
            <path d="M617 431V308L1400.5 305.5V431H617Z" data-name="A" data-floor="C" data-area="8 miestnosti" data-status="free" data-url="/floor/1/3"  class="hero-zone fill-white/20 hover:fill-green-500/40 transition-all duration-300 cursor-pointer" data-url="" fill="#D9D9D9" fill-opacity="0.23"/>
            <path d="M229 694.5V577.5H615H1401.5V607.5H1101.5V730H615V694.5H229Z"  data-name="A" data-floor="A" data-area="7 miestnosti" data-status="free" data-url="/floor/1/1"  class="hero-zone fill-white/20 hover:fill-green-500/40 transition-all duration-300 cursor-pointer" fill="#d9d9d944" fill-opacity="0.23"/>
            <path d="M1400 577H616.5H229V445.5L246 443.5V431H616.5H1400V577Z" data-name="A" data-floor="B" data-area="16 miestnosti" data-status="free" data-url="/floor/1/2"  class="hero-zone fill-white/20 hover:fill-green-500/40 transition-all duration-300 cursor-pointer" fill="#d9d9d944" fill-opacity="0.23"/>
        </svg>

        <svg id="heroMobileA" class="hero-svg active block md:hidden  min-h-full" viewBox="0 0 1025 1536" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
             <image 
            href="./images/bg_mobile_1.webp"
            class="animate-heroReveal"
            />
            <path d="M998 924H0V1019.13H321.5V1053H737.972V944.421H998V924Z" data-name="A" data-floor="A" data-area="7 miestnosti" data-status="free" data-url="/floor/1/1" class="hero-zone fill-white/20 hover:fill-green-500/40 transition-all duration-300 cursor-pointer" fill="#d82b2b" fill-opacity="0.23"/>
            <path d="M321 787H0V923H321.607L998 924V816.074H321V787Z" data-name="A" data-floor="B" data-area="16 miestnosti" data-status="free" data-url="/floor/1/2"  class="hero-zone fill-white/20 hover:fill-green-500/40 transition-all duration-300 cursor-pointer" fill="#09e92e" fill-opacity="0.23"/>
            <path d="M321 815.5V678L998 676.5V815.5H321Z" data-name="A" data-floor="C" data-area="8 miestnosti" data-status="free" data-url="/floor/1/3"  class="hero-zone fill-white/20 hover:fill-green-500/40 transition-all duration-300 cursor-pointer" fill="#2c1d1d" fill-opacity="0.23"/>
        </svg>


        <svg id="heroMobileB" class="hero-svg  block md:hidden min-h-full" viewBox="0 0 1024 1536" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <image 
            href="./images/bg_mobile_2.webp"
            class="animate-heroReveal object-center"
            loading="lazy"
            />
            <path d="M1 915V889H13.0061L35.5176 819H209.106L240.622 790L269.137 817H835.426L958.489 844.5H981V869.5H968.994V915H1Z"  data-name="B" data-floor="B" data-area="8 apartmánov" data-status="free" data-url="/floor/2/2" class="hero-zone fill-white/20 hover:fill-green-500/40 transition-all duration-300 cursor-pointer" fill="#D9D9D9" fill-opacity="0.23"/>
        </svg>


        <svg id="heroDesktopB" class="hero-svg hidden md:block" preserveAspectRatio="xMidYMid slice" viewBox="0 150 1536 1524" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <image 
            href="./images/bg_2.webp"
            class="animate-heroReveal"
            loading="lazy"
            />
            <path data-name="B" data-floor="B" data-area="8 apartmánov" data-status="free" data-url="/floor/2/2"  d="M1504 537.5H18.5V499.5H34.5L60 408H242.5L336.5 403L389.5 356.5L432 397H1294L1489 432.5H1523V471.5H1504V537.5Z" class="hero-zone fill-white/20 hover:fill-green-500/40 transition-all duration-300 cursor-pointer" fill="#D9D9D9" fill-opacity="0.23"/>
        </svg>

       <div id="apartment-panel"
            class="absolute md:fixed z-[9999]
            bg-[#333333]
            backdrop-blur-xl
            border border-white/10
            text-white
            px-4 py-3
            w-[260px]
            opacity-0
            pointer-events-none
            transition-opacity duration-200">

            <div class="flex items-baseline gap-3 mb-2">

                <div class="flex items-baseline gap-2">
                    <h3 id="panel-name" class="text-md md:text-xl font-semibold"></h3>
                    <span class="text-xs text-white/50 uppercase">budova</span>
                </div>

                <div class="w-px h-5 bg-white/20"></div>

                <div class="flex items-baseline gap-2">
                    <p id="panel-floor" class="text-md md:text-lg font-semibold"></p>
                    <span class="text-xs text-white/50 uppercase">poshodie</span>
                </div>
            </div>
            <div>
                <p id="panel-area" class="text-xs md:text-sm text-white/80 mb-2"></p>
            </div>

            <div id="panel-status" class="text-xs md:text-sm mt-2 uppercase font-[DMMono]"></div>

        </div>



        <div 
            class="absolute inset-0 opacity-10 pointer-events-none"
            style="background-image: repeating-linear-gradient(0deg, transparent, transparent 2px, black 3px);">
        </div>
    </div>

    <div>

        <div
            class="absolute
                bottom-28 md:bottom-5
                left-5 md:left-20

                hidden md:block

                flex items-center gap-3
                bg-[#1e1e1e]
                text-white

                px-4 py-3
                text-[11px] md:text-[13px]

                font-[DMMono] uppercase"
        >
            SK, Stará Ľubovňa
        </div>

        <div
            class="absolute
                bottom-5
                left-5 md:left-auto
                right-5 md:right-20

                flex flex-col md:flex-row
                gap-3

                font-[DMMono]"
        >
            <button
                id="buildingBtn"
                class="bg-[#d59a42]
                    text-white

                    text-[12px] md:text-[13px]

                    px-4 py-3

                    animate-zoomUp opacity-0
                    cursor-pointer

                    w-full md:w-auto uppercase
                    "
                style="animation-delay: 0.9s;"
            >
                POZRIEŤ Dom služieb II
            </button>

            <span
                class="px-4 py-3

                    flex items-center justify-center gap-3

                    bg-white
                    text-black

                    text-[12px] md:text-[13px]

                    animate-slideUp opacity-0

                    w-full md:w-auto

                    text-center"
                style="animation-delay: 1s;"
            >
                VYBERTE OBLAST ZOBRAZENIA
            </span>

        </div>

    </div>
</section>

<style>
.animate-heroReveal,
.animate-slideUp,
.animate-zoomUp {
    will-change: transform, opacity, filter;
}

@keyframes heroReveal {
    0% {
        transform: scaleY(1.02);
        filter: brightness(0.35);
        opacity: 0;
    }

    100% {
        transform: scaleY(1);
        filter: brightness(1);
        opacity: 1;
    }
}

.animate-heroReveal {
    animation: heroReveal 2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}

@keyframes slideUp {
    0% {
        transform: translateY(30px);
        opacity: 0;
    }

    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

.animate-slideUp {
    animation: slideUp 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}

@keyframes zoomUp {
    0% {
        transform: scale(0.92);
        opacity: 0;
    }

    70% {
        transform: scale(1.02);
        opacity: 1;
    }

    100% {
        transform: scale(1);
        opacity: 1;
    }
}

.animate-zoomUp {
    animation: zoomUp 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}

.hero-svg {
    position: absolute;
    inset: 0;
    opacity: 0;

    transition:
        opacity 1.2s cubic-bezier(0.16, 1, 0.3, 1),
        transform 1.2s cubic-bezier(0.16, 1, 0.3, 1);

    pointer-events: none;

    will-change: opacity;
}

.hero-svg.active {
    opacity: 1;
    pointer-events: auto;
}

.hero-svg {
    transition:
        opacity 1.8s cubic-bezier(0.16, 1, 0.3, 1),
        transform 1.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.hero-zone {
    transition:
        fill .35s ease,
        opacity .35s ease,
        filter .35s ease,
        transform .35s ease;
}

.hero-zone:hover {
    fill: rgba(34, 197, 94, 0.35);
}


#apartment-panel {
    transform: translateY(-50%);
}

#apartment-panel.active {
    opacity: 1;
    pointer-events: auto;
}


@media (max-width: 768px) {

    #apartment-panel {
        width: calc(100% - 32px);
        max-width: 320px;
    }

}
</style>