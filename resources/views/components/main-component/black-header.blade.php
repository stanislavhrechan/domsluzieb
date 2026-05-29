<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<header
    x-data="{
        isMenuOpen: false,
        isContactOpen: false,
        scrolled: false
    }"
    @scroll.window="scrolled = window.scrollY > 50"
    :class="scrolled ? 'bg-transparent' : 'bg-white h-18'"
    class="fixed top-0 left-0 w-full z-[9999] transition-all duration-500"
>

    <div class="absolute top-3 left-5 md:left-20 z-50">
        <img
            src="{{ asset('images/logo.svg') }}"
            alt="Logo"
            class="w-12 md:w-16 transition-all duration-500"
            :class="scrolled ? 'invert-0' : 'invert'"
        />
    </div>

    <div
        class="hidden md:flex absolute top-5 right-20 items-center transition-all duration-500"
    >

        <a
            href="/"
            :class="scrolled ? 'text-black' : 'text-black'"
            class="uppercase px-5 py-2 text-xs transition"
        >
            Dom služieb
        </a>

        <a
            href="{{ route('gallery') }}"
            :class="scrolled ? 'text-black' : 'text-black'"
            class="uppercase px-5 py-2 text-xs transition"
        >
            Galéria
        </a>

        <button
            @click="isContactOpen = true"
            class="px-5 py-2 text-xs text-white bg-[#d59a42] hover:bg-[#c4872f] transition-all duration-300 cursor-pointer"
        >
            KONTAKT
        </button>

    </div>

    <button
        @click="isMenuOpen = true"
        class="md:hidden absolute top-5 right-5 z-50 transition text-black"
    >

        <svg xmlns="http://www.w3.org/2000/svg"
             fill="none"
             viewBox="0 0 24 24"
             stroke-width="1.5"
             stroke="currentColor"
             class="w-8 h-8">

            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5m-16.5 5.25h16.5m-16.5 5.25h16.5"
            />

        </svg>

    </button>

    <!-- MOBILE MENU BACKDROP -->
    <div
        x-cloak
        x-show="isMenuOpen"
        @click="isMenuOpen = false"
        x-transition.opacity
        class="fixed inset-0 bg-black/40 backdrop-blur-sm z-40 md:hidden"
    ></div>

    <!-- MOBILE MENU -->
    <div
        x-cloak
        x-show="isMenuOpen"

        x-transition:enter="transition duration-300"
        x-transition:enter-start="opacity-0 translate-y-[-10px]"
        x-transition:enter-end="opacity-100 translate-y-0"

        x-transition:leave="transition duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-[-10px]"

        class="md:hidden fixed top-20 right-5 w-64 bg-[#323232] text-white z-50 shadow-2xl  overflow-hidden"
    >

        <div class="flex flex-col">

            <a
                href="/"
                class="px-5 py-4 border-b border-neutral-700 uppercase text-sm hover:bg-neutral-800 transition"
            >
                Dom služieb
            </a>

            <a
                href="{{ route('gallery') }}"
                class="px-5 py-4 border-b border-neutral-700 uppercase text-sm hover:bg-neutral-800 transition"
            >
                Galéria
            </a>

            <button
                @click="
                    isContactOpen = true;
                    isMenuOpen = false;
                "
                class="px-5 py-4 text-left uppercase text-sm bg-[#d59a42] hover:bg-[#c4872f] transition"
            >
                KONTAKT
            </button>

        </div>

    </div>

    <!-- CONTACT BACKDROP -->
    <div
        x-cloak
        x-show="isContactOpen"
        @click="isContactOpen = false"
        x-transition.opacity
        class="fixed inset-0 bg-black/40 backdrop-blur-sm z-40"
    ></div>

    <!-- CONTACT SIDEBAR -->
    <div
        x-cloak
        x-show="isContactOpen"

        x-transition:enter="transform transition duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]"
        x-transition:enter-start="translate-x-full opacity-0"
        x-transition:enter-end="translate-x-0 opacity-100"

        x-transition:leave="transform transition duration-400 ease-in-out"
        x-transition:leave-start="translate-x-0 opacity-100"
        x-transition:leave-end="translate-x-full opacity-0"

        class="fixed top-0 md:top-1/2 right-0
               md:-translate-y-1/2
               h-screen md:h-[95vh]
               w-full md:w-[500px]
               bg-[#323232]
               z-50 shadow-2xl text-white
               mx-0 md:mx-5
               overflow-y-auto"
    >

        <!-- CLOSE -->
        <button
            @click="isContactOpen = false"
            class="absolute top-5 right-5 text-white cursor-pointer hover:rotate-90 transition-transform duration-300"
        >

            <svg xmlns="http://www.w3.org/2000/svg"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke-width="1.5"
                 stroke="currentColor"
                 class="w-6 h-6">

                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18 18 6M6 6l12 12"
                />

            </svg>

        </button>

        <!-- CONTENT -->
        <div class="p-5 md:p-8">

            <!-- TITLE -->
            <div class="mb-8">

                <h2 class="text-3xl font-light mb-2">
                    Kontakt
                </h2>

                <p class="text-sm font-light text-gray-300">
                    Radi vám pomôžeme s vašimi otázkami.
                </p>

            </div>

            <!-- FORM -->
            <div class="mb-10">

                <form method="POST" action="{{ route('contact.send') }}"  class="space-y-5">
                    @csrf

                    <input
                        type="text"
                        placeholder="Meno"
                        class="w-full bg-transparent border border-neutral-600 p-3 text-sm outline-none focus:border-white transition"
                    >

                    <input
                        type="email"
                        placeholder="Email"
                        class="w-full bg-transparent border border-neutral-600 p-3 text-sm outline-none focus:border-white transition"
                    >

                    <input
                        type="tel"
                        placeholder="Telefónne číslo"
                        class="w-full bg-transparent border border-neutral-600 p-3 text-sm outline-none focus:border-white transition"
                    >

                    <textarea
                        placeholder="Správa"
                        rows="5"
                        class="w-full bg-transparent border border-neutral-600 p-3 text-sm outline-none resize-none focus:border-white transition"
                    ></textarea>

                    <button
                        type="submit"
                        class="border border-white w-full px-4 py-3 text-sm hover:bg-white hover:text-black transition duration-300 cursor-pointer"
                    >
                        Odoslať
                    </button>

                </form>

            </div>

            <!-- PRIVACY -->
            <p class="text-xs mb-8 text-neutral-400">
                Potvrdzujete, že vaše údaje uvedené vo formulári budú spracované našou webovou stránkou.
            </p>

            <!-- CONTACT INFO -->
            <div class="flex flex-col md:flex-row gap-3 md:gap-5 text-xs text-neutral-300">

                <p class="font-[DMMono]">
                    stesnakova.maria@gmail.com
                </p>

                <p class="font-[DMMono]">
                    +42191991361
                </p>

                <p class="font-[DMMono]">
                    SK, STARA LUBOVNA
                </p>

            </div>

        </div>

    </div>

</header>