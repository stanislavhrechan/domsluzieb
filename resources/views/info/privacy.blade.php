@extends('layouts.info')

@section('title', 'Ochrana osobných údajov')

@section('content')
<div class="bg-white">
    <div class="px-5 md:px-20 py-21">
        <div class="mb-16">
            <span class="text-xs tracking-[0.3em] font-[DMMono] uppercase text-neutral-400">
                Právne informácie
            </span>

            <h1 class="mt-4 text-5xl md:text-7xl leading-[0.92] tracking-tight font-light">
                Ochrana osobných údajov
            </h1>
        </div>

        <div class="space-y-12">
            <section>
                <p class="text-lg text-gray-700 leading-relaxed">
                   <strong>Dom Služieb</strong> rešpektuje vaše
                    súkromie a zaväzuje sa chrániť vaše osobné údaje v súlade
                    s platnými právnymi predpismi Slovenskej republiky a Európskej únie.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    Aké údaje zhromažďujeme
                </h2>

                <ul class="space-y-2 text-gray-700">
                    <li>• Meno a priezvisko</li>
                    <li>• E-mailová adresa</li>
                    <li>• Telefónne číslo</li>
                    <li>• Informácie odoslané prostredníctvom kontaktného formulára</li>
                    <li>• Technické údaje o návšteve webovej stránky</li>
                </ul>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    Účel spracovania údajov
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    Osobné údaje spracúvame za účelom komunikácie so zákazníkmi,
                    vybavovania dopytov, poskytovania služieb, zlepšovania našej
                    webovej stránky a plnenia zákonných povinností.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    Ochrana údajov
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    Prijímame primerané technické a organizačné opatrenia na ochranu
                    vašich osobných údajov pred neoprávneným prístupom, stratou,
                    zneužitím alebo zverejnením.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    Súbory cookies
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    Naša webová stránka môže používať súbory cookies na zlepšenie
                    používateľského zážitku a analýzu návštevnosti.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    Vaše práva
                </h2>

                <ul class="space-y-2 text-gray-700">
                    <li>• Právo na prístup k údajom</li>
                    <li>• Právo na opravu údajov</li>
                    <li>• Právo na vymazanie údajov</li>
                    <li>• Právo namietať proti spracovaniu</li>
                    <li>• Právo na prenosnosť údajov</li>
                </ul>
            </section>
        </div>
    </div>
</div>
<x-home-section.footer/>
@endsection