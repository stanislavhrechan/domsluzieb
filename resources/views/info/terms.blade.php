@extends('layouts.info')

@section('title', 'Obchodné podmienky')

@section('content')
<div class="bg-white">
    <div class="px-5 md:px-20 py-21">
        <div class="mb-16">
            <span class="text-xs tracking-[0.3em] font-[DMMono] uppercase text-neutral-400">
                Právne informácie
            </span>

            <h1 class="mt-4 text-5xl md:text-7xl leading-[0.92] tracking-tight font-light">
                Obchodné podmienky
            </h1>
        </div>

        <div class="space-y-12">
            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    1. Prijatie podmienok
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    Používaním tejto webovej stránky súhlasíte s týmito podmienkami a všetkými platnými zákonmi a predpismi.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    2. Účel webovej stránky
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    Táto webová stránka poskytuje informácie o službách, zariadeniach a aktivitách súvisiacich s Domom služieb Stará Ľubovňa.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    3. Duševné vlastníctvo
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    Všetok obsah vrátane textov, grafiky, log, obrázkov a dizajnových prvkov je chránený platnými zákonmi o duševnom vlastníctve.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    4. Povinnosti používateľa
                </h2>

                <ul class="space-y-2 text-gray-700">
                    <li>• Používať webovú stránku v súlade so zákonom</li>
                    <li>• Poskytovať presné informácie</li>
                    <li>• Rešpektovať bezpečnosť stránky</li>
                    <li>• Vyhýbať sa rušivým aktivitám</li>
                </ul>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    5. Vylúčenie zodpovednosti
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    Informácie na tejto webovej stránke sú poskytované iba na všeobecné informačné účely. Nezaručujeme úplnosť ani presnosť všetkého obsahu.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    6. Obmedzenie zodpovednosti
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    Dom služieb Stará Ľubovňa nezodpovedá za žiadne škody vzniknuté používaním tejto webovej stránky.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    7. Externé odkazy
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    Môžeme poskytovať odkazy na webové stránky tretích strán. Nenesieme zodpovednosť za ich obsah ani zásady ochrany súkromia.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    8. Zmeny
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    Vyhradzujeme si právo kedykoľvek aktualizovať tieto podmienky. Zmeny nadobúdajú účinnosť po zverejnení na tejto stránke.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    9. Rozhodné právo
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    Tieto podmienky sa riadia právnymi predpismi Slovenskej republiky.
                </p>
            </section>
        </div>
    </div>
</div>

<x-home-section.footer/>
@endsection