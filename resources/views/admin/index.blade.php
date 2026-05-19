@extends('layouts.admin')
@section('content')
<div class="p-4 md:p-8">
    <div class="flex md:flex-row flex-col gap-3 md:gap-0 md:items-center justify-between mb-8">
        <div>
            <h1 class="text-white text-2xl font-semibold">Budova</h1>
            <p class="text-white/40 text-sm">
                Ovládať každé poschodie s rôznymi informáciami o ňom
            </p>
        </div>

        <button onclick="openFloorModal()"
            class="px-4 py-2 bg-white text-black text-sm font-medium hover:bg-white/90 cursor-pointer">
            + Nova budova
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

        @foreach($builds as $build)
        <a href="{{ route('admin.building.floors', $build->id) }}"
           class="p-5 border border-white/10 bg-white/5 hover:bg-white/10 transition group relative overflow-hidden">

            <svg class="absolute right-0 top-0 h-full w-24 text-white/15 opacity-20"
                 viewBox="0 0 100 100" fill="none">
                <path d="M10 90 L10 10 L90 10" stroke="currentColor"/>
                <path d="M20 90 L20 20 L90 20" stroke="currentColor"/>
                <path d="M30 90 L30 30 L90 30" stroke="currentColor"/>
                <circle cx="20" cy="20" r="2" fill="currentColor"/>
            </svg>

            <div class="flex justify-between items-start">
                <div>
                    <h2 class="text-white font-medium">
                        {{ $build->name }}
                    </h2>

                    <p class="text-white/40 text-sm mt-1">
                       
                    </p>
                </div>

                <span class="text-xs text-white/40 group-hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                </span>
            </div>

        </a>
        @endforeach

    </div>
</div>
@endsection