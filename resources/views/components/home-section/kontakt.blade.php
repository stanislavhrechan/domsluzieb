<section class="bg-[#FAFAFA] py-24 px-6 relative">

  <div class="max-w-4xl mx-auto text-center">

    <h2 class="text-3xl md:text-4xl text-gray-900 mb-4 uppercase">
      Máte záujem o priestor?
    </h2>

    <p class="text-gray-600 text-md mb-4 font-[DMMono] uppercase">
      Radi vám poskytneme viac informácií a dohodneme obhliadku v Dome služieb v Starej Ľubovni.
    </p>

    <!-- BUTTON -->
    <button
        onclick="document.getElementById('contactModal').classList.remove('hidden')"
        class="inline-block bg-black text-white px-8 py-4 text-sm uppercase tracking-wider hover:bg-gray-800 transition cursor-pointer"
    >
        Kontaktujte nás
    </button>

  </div>

  <!-- OVERLAY -->
  <div
      id="contactModal"
      class="hidden fixed inset-0 bg-black/40 backdrop-blur-sm z-50 flex items-center justify-center"
  >

      <!-- CLICK OUTSIDE -->
      <div
          class="absolute inset-0"
          onclick="document.getElementById('contactModal').classList.add('hidden')"
      ></div>

      <!-- FORM BOX -->
      <div class="relative bg-[#323232] text-white w-full max-w-md p-8 z-10">

          <!-- CLOSE -->
          <button
              onclick="document.getElementById('contactModal').classList.add('hidden')"
              class="absolute top-4 right-4 text-white text-xl"
          >
              ✕
          </button>

          <h2 class="text-2xl mb-6">Kontakt</h2>

          <form method="POST" action="{{ route('contact.send') }}" class="space-y-4">
              @csrf

              <input
                  type="text"
                  name="name"
                  placeholder="Meno"
                  class="w-full p-3 bg-transparent border border-gray-500"
              >

              <input
                  type="email"
                  name="email"
                  placeholder="Email"
                  class="w-full p-3 bg-transparent border border-gray-500"
              >

              <input
                  type="tel"
                  name="tel"
                  placeholder="Telefón"
                  class="w-full p-3 bg-transparent border border-gray-500"
              >

              <textarea
                  name="message"
                  placeholder="Správa"
                  rows="4"
                  class="w-full p-3 bg-transparent border border-gray-500"
              ></textarea>

              <button
                  type="submit"
                  class="w-full bg-white text-black py-3 hover:bg-gray-200"
              >
                  Odoslať
              </button>

          </form>

      </div>
  </div>

</section>