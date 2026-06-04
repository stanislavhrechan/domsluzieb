<footer class="bg-[#111111] text-white relative overflow-hidden md:min-h-[80vh]">

  <!-- LOGO -->
  <div class="hidden md:block absolute top-5 left-5 md:left-20 z-20">
      <img src="{{ asset('images/logo.svg') }}" alt="" class="w-20 md:w-25"/>

      <span class="block mt-2 uppercase font-[DMMono] text-xs text-white/50">
        © 2026 Dom Sluzieb. All rights reserved.
      </span>
  </div>

  <!-- LEFT DECORATION (HIDDEN ON MOBILE) -->
  <div class="hidden md:flex absolute bottom-0 left-0 items-end gap-6 px-6">
    
    <div class="footer-bar w-20 h-82 bg-white/40 relative overflow-hidden">
      <div class="absolute inset-0 opacity-30 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:10px_10px]"></div>
    </div>

    <div class="footer-bar w-28 h-124 bg-white/50 relative overflow-hidden">
      <div class="absolute inset-0 opacity-30 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:10px_10px]"></div>
    </div>

    <div class="footer-bar w-24 h-68 bg-white/35 relative overflow-hidden">
      <div class="absolute inset-0 opacity-30 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:10px_10px]"></div>
    </div>

  </div>

  <!-- MAIN PANEL -->
  <div class="relative md:absolute md:bottom-0 md:right-0 z-10 w-full md:max-w-4xl ml-auto px-6 md:px-8 py-12 md:py-16 bg-white/95 backdrop-blur-md">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 text-black">

      <!-- COLUMN 1 -->
      <div>
        <h4 class="text-xs font-[DMMono] uppercase tracking-wider mb-4 text-black/60">
          Dom Služieb
        </h4>

        <ul class="space-y-3 text-sm">
          <li>
            <a
              href="https://maps.app.goo.gl/5Qehe8tvzzbehcgb7"
              target="_blank"
              class="hover:text-black transition"
            >
              Lokácia
            </a>
          </li>
        </ul>
      </div>

      <!-- COLUMN 2 -->
      <div>
        <h4 class="text-xs font-[DMMono] uppercase tracking-wider mb-4 text-black/60">
          Support
        </h4>

        <ul class="space-y-3 text-sm">
          <li>
            <button
                @click="isContactOpen = true"
                class="hover:text-black transition cursor-pointer">
                Kontakt
            </button>
          </li>
        </ul>
      </div>

      <!-- COLUMN 3 -->
      <div>
        <h4 class="text-xs font-[DMMono] uppercase tracking-wider mb-4 text-black/60">
          Company
        </h4>

        <ul class="space-y-3 text-sm">
          <li><a href="/privacy" class="hover:text-black transition">Ochrana osobných údajov</a></li>
          <li><a href="/terms" class="hover:text-black transition">Obchodné podmienky</a></li>
        </ul>
      </div>

    </div>

    <!-- BOTTOM -->
    <div class="mt-12 md:mt-16 border-t border-black/10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4 text-sm">

      <span class="uppercase font-[DMMono] text-xs text-black/50 text-center md:text-left">
        Site By Dionis
      </span>

    </div>

  </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script>
  gsap.registerPlugin(ScrollTrigger);

  gsap.utils.toArray(".footer-bar").forEach((bar, i) => {
    gsap.to(bar, {
      y: 50 * (i + 1),
      scrollTrigger: {
        trigger: "footer",
        start: "top bottom",
        end: "bottom bottom",
        scrub: true
      }
    });
  });
</script>