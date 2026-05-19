<footer class="bg-[#111111] text-white relative overflow-hidden min-h-[80vh]">
   <div class="absolute top-5 left-20">
        <img src="{{ asset('images/logo.svg') }}" alt="" class="w-25"/>
        <span class="uppercase font-[DMMono] text-xs text-white/50">
          © 2026 Dom Sluzieb. All rights reserved.
        </span>
    </div>
  <div class="absolute bottom-0 left-0 flex items-end gap-6 px-6">
    
    <div class="footer-bar w-20 h-82 bg-white/40 relative">
      <div class="absolute left-5 right-0 bottom-0 top-5 opacity-30 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:10px_10px]"></div>
    </div>

    <div class="footer-bar w-28 h-124 bg-white/50 relative">
      <div class="absolute left-2 right-0 bottom-0 top-5 opacity-30 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:10px_10px]"></div>
    </div>

    <div class="footer-bar w-24 h-68 bg-white/35 relative">
      <div class="absolute left-0 right-3 bottom-0 top-5 opacity-30 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:10px_10px]"></div>
    </div>

  </div>

  <div class="absolute bottom-0 right-0 z-10 max-w-4xl w-full l ml-auto px-8 mt-15 py-16 bg-white/95 backdrop-blur-md">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-black">

      <div>
        <h4 class="text-xs font-[DMMono]  uppercase tracking-wider mb-4 text-black/60">
          Building
        </h4>
        <ul class="space-y-3 text-sm">
          <li><a href="#" class="hover:text-black transition">Budova A</a></li>
          <li><a href="#" class="hover:text-black transition">Budova B</a></li>
          <li><a href="#" class="hover:text-black transition">Documentation</a></li>
        </ul>
      </div>

      <div>
        <h4 class="text-xs font-[DMMono]  uppercase tracking-wider mb-4 text-black/60">
          Support
        </h4>
        <ul class="space-y-3 text-sm">
          <li><a href="#" class="hover:text-black transition">Help Center</a></li>
          <li><a href="#" class="hover:text-black transition">Contact</a></li>
          <li><a href="#" class="hover:text-black transition">FAQ</a></li>
        </ul>
      </div>


      <div>
        <h4 class="text-xs font-[DMMono]  uppercase tracking-wider mb-4 text-black/60">
          Company
        </h4>
        <ul class="space-y-3 text-sm">
          <li><a href="#" class="hover:text-black transition">Privacy</a></li>
          <li><a href="#" class="hover:text-black transition">Terms</a></li>
          <li><a href="#" class="hover:text-black transition">Cookies</a></li>
        </ul>
      </div>

    </div>

    <div class="mt-16 border-t border-black/10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4 text-sm">
      <span class="uppercase font-[DMMono] text-xs text-black/50">
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