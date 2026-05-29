@extends('layouts.info')
@section('content')
<div class="min-h-screen bg-neutral-50 text-neutral-800">
    <section class="border-b border-neutral-200 bg-white">
        <div class="max-w-5xl mx-auto px-6 py-20">
            
            <div class="max-w-3xl">
              

                <h1 class="text-4xl md:text-5xl font-semibold tracking-tight leading-tight mb-6">
                    Obchodné podmienky
                </h1>

                <p class="text-lg text-neutral-600 leading-relaxed">
                    Tieto podmienky upravujú používanie webovej stránky určenej
                    na prezentáciu apartmánov, voľných priestorov a zasielanie
                    kontaktných formulárov záujemcami o ubytovanie alebo prenájom.
                </p>
            </div>

        </div>
    </section>

    <section>
        <div class="max-w-4xl mx-auto px-6 py-16">

            <div class="space-y-14">

                <div class="grid md:grid-cols-12 gap-8">
                    
                    <div class="md:col-span-3">
                        <div class="sticky top-24">
                            <span class="text-sm uppercase tracking-[0.2em] text-neutral-400">
                                01
                            </span>

                            <h2 class="mt-3 text-xl font-semibold leading-snug">
                                Používanie webovej stránky
                            </h2>
                        </div>
                    </div>

                    <div class="md:col-span-9">
                        <div class="space-y-5 text-neutral-600 leading-8 text-[15px]">
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
                    </div>

                </div>

                <div class="border-t border-neutral-200"></div>

                <div class="grid md:grid-cols-12 gap-8">
                    
                    <div class="md:col-span-3">
                        <div class="sticky top-24">
                            <span class="text-sm uppercase tracking-[0.2em] text-neutral-400">
                                02
                            </span>

                            <h2 class="mt-3 text-xl font-semibold leading-snug">
                                Kontaktný formulár
                            </h2>
                        </div>
                    </div>

                    <div class="md:col-span-9">
                        <div class="space-y-5 text-neutral-600 leading-8 text-[15px]">
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
                    </div>

                </div>

                <div class="border-t border-neutral-200"></div>

                <div class="grid md:grid-cols-12 gap-8">
                    
                    <div class="md:col-span-3">
                        <div class="sticky top-24">
                            <span class="text-sm uppercase tracking-[0.2em] text-neutral-400">
                                03
                            </span>

                            <h2 class="mt-3 text-xl font-semibold leading-snug">
                                Zodpovednosť
                            </h2>
                        </div>
                    </div>

                    <div class="md:col-span-9">
                        <div class="space-y-5 text-neutral-600 leading-8 text-[15px]">
                            <p>
                                Prevádzkovateľ nezodpovedá za dočasnú nedostupnosť stránky,
                                technické chyby alebo neúplnosť zobrazených údajov.
                            </p>

                            <p>
                                Používanie stránky je na vlastnú zodpovednosť používateľa.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="border-t border-neutral-200"></div>

                <div class="grid md:grid-cols-12 gap-8">
                    
                    <div class="md:col-span-3">
                        <div class="sticky top-24">
                            <span class="text-sm uppercase tracking-[0.2em] text-neutral-400">
                                04
                            </span>

                            <h2 class="mt-3 text-xl font-semibold leading-snug">
                                Záverečné ustanovenia
                            </h2>
                        </div>
                    </div>

                    <div class="md:col-span-9">
                        <div class="space-y-5 text-neutral-600 leading-8 text-[15px]">
                            <p>
                                Tieto podmienky môžu byť aktualizované bez
                                predchádzajúceho upozornenia.
                            </p>

                            <p>
                                Pokračovaním v používaní stránky používateľ súhlasí
                                s aktuálnym znením podmienok.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

</div>

<x-home-section.footer/>
@endsection