@extends('layouts.info')
@section('content')
<div class="min-h-screen bg-gray-50 text-gray-800">
    <div class="px-5 py-16">
        <div class="mb-12">
            <h1 class="text-2xl font-bold mb-4">
                Obchodné podmienky
            </h1>

            <p class="text-gray-600 leading-relaxed">
                Tieto podmienky upravujú používanie webovej stránky určenej
                na prezentáciu apartmánov, voľných priestorov a zasielanie
                kontaktných formulárov záujemcami o ubytovanie alebo prenájom.
            </p>
        </div>

        <div class="space-y-8">

            <section class="p-8">
                <h2 class="text-2xl font-semibold mb-4">
                    1. Používanie webovej stránky
                </h2>

                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>
                        Webová stránka slúži výhradne na informačné účely.
                        Používatelia môžu prezerať dostupné apartmány,
                        podlažia budovy, fotografie, dostupnosť a odoslať
                        kontaktný formulár.
                    </p>

                    <p>
                        Informácie uvedené na stránke majú informatívny charakter
                        a nepredstavujú právne záväznú ponuku.
                    </p>

                    <p>
                        Prevádzkovateľ si vyhradzuje právo meniť obsah,
                        dostupnosť apartmánov alebo technické informácie
                        bez predchádzajúceho upozornenia.
                    </p>
                </div>
            </section>

            <section class="bg-white p-8">
                <h2 class="text-2xl font-semibold mb-4">
                    2. Kontaktný formulár
                </h2>

                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>
                        Používateľ môže prostredníctvom formulára odoslať
                        svoju požiadavku za účelom kontaktovania zo strany
                        prevádzkovateľa.
                    </p>

                    <p>
                        Používateľ sa zaväzuje uvádzať pravdivé a aktuálne údaje.
                    </p>

                    <p>
                        Odoslanie formulára nezaručuje rezerváciu ani uzatvorenie
                        zmluvného vzťahu.
                    </p>
                </div>
            </section>

            <section class="p-8">
                <h2 class="text-2xl font-semibold mb-4">
                    3. Zodpovednosť
                </h2>

                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>
                        Prevádzkovateľ nezodpovedá za dočasnú nedostupnosť stránky,
                        technické chyby alebo neúplnosť zobrazených údajov.
                    </p>

                    <p>
                        Používanie stránky je na vlastnú zodpovednosť používateľa.
                    </p>
                </div>
            </section>

            <section class="p-8">
                <h2 class="text-2xl font-semibold mb-4">
                    4. Záverečné ustanovenia
                </h2>

                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>
                        Tieto podmienky môžu byť aktualizované bez predchádzajúceho upozornenia.
                    </p>

                    <p>
                        Pokračovaním v používaní stránky používateľ súhlasí
                        s aktuálnym znením podmienok.
                    </p>
                </div>
            </section>

        </div>

    </div>
</div>
<x-home-section.footer/>
@endsection