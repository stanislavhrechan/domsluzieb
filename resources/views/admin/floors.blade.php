@extends('layouts.admin')

@section('content')
<div class="p-4 md:p-8">
    <div class="flex md:flex-row flex-col gap-3 md:gap-0 md:items-center justify-between mb-8">
        <div>
            <h1 class="text-white text-2xl font-semibold">{{ $building->name }} / Poshodia</h1>
            <p class="text-white/40 text-sm">
                Ovládať každé poschodie s rôznymi informáciami o ňom
            </p>
        </div>

        <button onclick="openFloorModal()"
            class="px-4 py-2 bg-white text-black text-sm font-medium hover:bg-white/90 cursor-pointer">
            + Nove poshodie
        </button>
    </div>
    <div class="flex gap-4 text-xs text-white/40 mb-6">
        <span class="flex items-center gap-1">
            <div class="w-2 h-2 bg-green-400 rounded-full"></div> Voľný
        </span>
        <span class="flex items-center gap-1">
            <div class="w-2 h-2 bg-red-400 rounded-full"></div> Predaný
        </span>
        <span class="flex items-center gap-1">
            <div class="w-2 h-2 bg-yellow-400 rounded-full"></div> Rezervovaný
        </span>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach($floors as $floor)

        <div class="p-5 border border-white/10 bg-white/5">

            <div class="flex items-center justify-between mb-5">

                <div>
                    <h2 class="text-white font-light uppercase">
                        Poshodie {{ $floor->floor_number }}
                    </h2>

                    <p class="text-xs text-white/40">
                        {{ $floor->apartments->count() }} miestnosti
                    </p>
                </div>

                <button
                    onclick="openApartmentModal({{ $floor->id }})"
                    class="px-3 py-2 bg-white text-black text-xs font-medium cursor-pointer uppercase"
                >
                    + Miestnost
                </button>

            </div>

            <div class="space-y-2">

                @foreach($floor->apartments as $apartment)

                <div class="p-3 bg-black/30 border border-white/5 cursor-pointer hover:bg-black/40 transition"
                    onclick="openEditApartmentModal(
                        {{ $apartment->id }},
                        '{{ $apartment->apartment_number }}',
                        {{ $apartment->area ?? 'null' }},
                        '{{ $apartment->coords ?? '' }}',
                        '{{ $apartment->status }}'
                    )">

                    <div class="flex items-center justify-between">

                        <div>
                            <h3 class="text-white text-sm">
                                Apartment {{ $apartment->apartment_number }}
                            </h3>

                            <p class="text-xs text-white/40">
                                {{ $apartment->rooms }} rooms • {{ $apartment->area }} m²
                            </p>
                        </div>

                        <div>
                            @if($apartment->status === 'free')
                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                            @elseif($apartment->status === 'occupied')
                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                            @elseif($apartment->status === 'reserved')
                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                            @endif
                        </div>
                    </div>

                </div>

                @endforeach

            </div>

        </div>

        @endforeach
    </div>
</div>

<div id="editApartmentModal"
     class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50
            opacity-0 pointer-events-none transition duration-300 ease-out">

    <div id="editApartmentModalBox"
         class="w-[420px] bg-[#111] border border-white/10 p-6
                scale-95 opacity-0 transition duration-300 ease-out">

        <div class="flex items-center justify-between mb-4">

            <h2 class="text-white text-lg font-semibold">
                Edit Apartment
            </h2>

            <button onclick="closeEditApartmentModal()"
                    class="text-white/40 hover:text-white cursor-pointer">
                ✕
            </button>

        </div>

        <form method="POST" id="editApartmentForm">
            @csrf
            @method('PUT')

            <div class="space-y-4">

                <div>
                    <label class="text-white/40 text-xs">Apartment number</label>
                    <input type="text" name="apartment_number" id="edit_apartment_number"
                           class="w-full mt-1 px-3 py-2 bg-white/5 border border-white/10 text-white"
                           required>
                </div>

                <div>
                    <label class="text-white/40 text-xs">Area (m²)</label>
                    <input type="number" step="0.01" name="area" id="edit_area"
                           class="w-full mt-1 px-3 py-2 bg-white/5 border border-white/10 text-white">
                </div>

                <div>
                    <label class="text-white/40 text-xs">Coords</label>
                    <input type="text" name="coords" id="edit_coords"
                           class="w-full mt-1 px-3 py-2 bg-white/5 border border-white/10 text-white">
                </div>

                <div>
                    <label class="text-white/40 text-xs">Status</label>

                    <select name="status" id="edit_status"
                            class="w-full mt-1 px-3 py-2 bg-[#111] border border-white/10 text-white">

                        <option value="free">Voľný</option>
                        <option value="occupied">Predaný</option>
                        <option value="reserved">Rezervovaný</option>

                    </select>
                </div>

            </div>

            <div class="flex justify-end gap-2 mt-5">

                <button type="button"
                        onclick="closeEditApartmentModal()"
                        class="px-3 py-2 bg-white/10 text-white text-sm cursor-pointer">
                    Cancel
                </button>

                <button type="submit"
                        class="px-3 py-2 bg-white text-black text-sm font-medium cursor-pointer">
                    Save
                </button>

            </div>

        </form>

    </div>
</div>


<div id="floorModal"
     class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50
            opacity-0 pointer-events-none transition duration-300 ease-out">

    <div id="floorModalBox"
         class="w-[420px] bg-[#111] border border-white/10  p-6
                scale-95 opacity-0 transition duration-300 ease-out">

        <div class="flex items-center justify-between mb-4">
            <h2 class="text-white text-lg font-semibold">
                Nové poschodie
            </h2>

            <button onclick="closeFloorModal()"
                    class="text-white/40 hover:text-white cursor-pointer">
                ✕
            </button>
        </div>

        <form method="POST" action="{{route('admin.floor.store')}}">
            @csrf
            <input type="hidden" name="building_id" value="{{ $building->id }}">
            <div class="space-y-3">

                <div>
                    <label class="text-white/40 text-xs">Číslo poschodia</label>
                    <input type="number" name="floor_number"
                           class="w-full mt-1 px-3 py-2 bg-white/5 border border-white/10  text-white"
                           placeholder="e.g. 1" required>
                </div>

            </div>

            <div class="flex justify-end gap-2 mt-5">
                <button type="button"
                        onclick="closeFloorModal()"
                        class="px-3 py-2  bg-white/10 text-white text-sm cursor-pointer">
                    Cancel
                </button>

                <button type="submit"
                        class="px-3 py-2  bg-white text-black text-sm font-medium cursor-pointer">
                    Create
                </button>
            </div>

        </form>

    </div>
</div>

<div id="apartmentModal"
     class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50
            opacity-0 pointer-events-none transition duration-300 ease-out">

    <div id="apartmentModalBox"
         class="w-[420px] bg-[#111] border border-white/10 p-6
                scale-95 opacity-0 transition duration-300 ease-out">

        <div class="flex items-center justify-between mb-4">

            <h2 class="text-white text-lg font-semibold">
                New Apartment
            </h2>

            <button onclick="closeApartmentModal()"
                    class="text-white/40 hover:text-white cursor-pointer">
                ✕
            </button>

        </div>

        <form method="POST" action="{{ route('admin.apartment.store') }}">

            @csrf

            <input type="hidden" name="floor_id" id="floor_id_input">

            <div class="space-y-4">

                <div>
                    <label class="text-white/40 text-xs">
                        Cislo Miestnosti
                    </label>

                    <input type="text"
                           name="apartment_number"
                           class="w-full mt-1 px-3 py-2 bg-white/5 border border-white/10 text-white"
                           required>
                </div>


                <div>
                    <label class="text-white/40 text-xs">
                        Area (m²)
                    </label>

                    <input type="number"
                           step="0.01"
                           name="area"
                           class="w-full mt-1 px-3 py-2 bg-white/5 border border-white/10 text-white">
                </div>

                <div>
                    <label class="text-white/40 text-xs">
                        Koordinaty SVG
                    </label>

                    <input type="text"
                           name="coords"
                           class="w-full mt-1 px-3 py-2 bg-white/5 border border-white/10 text-white">
                </div>

                <div>
                    <label class="text-white/40 text-xs">
                        Status
                    </label>

                    <select
                        name="status"
                        class="w-full mt-1 px-3 py-2 bg-[#111] border border-white/10 text-white">

                        <option value="free">Voľný</option>
                        <option value="occupied">Predaný</option>
                        <option value="reserved">Rezervovaný</option>

                    </select>
                </div>

            </div>

            <div class="flex justify-end gap-2 mt-5">

                <button type="button"
                        onclick="closeApartmentModal()"
                        class="px-3 py-2 bg-white/10 text-white text-sm cursor-pointer">
                    Cancel
                </button>

                <button type="submit"
                        class="px-3 py-2 bg-white text-black text-sm font-medium cursor-pointer">
                    Create
                </button>

            </div>

        </form>

    </div>

</div>

<script>
function openFloorModal() {
    const modal = document.getElementById('floorModal');
    const box = document.getElementById('floorModalBox');

    modal.classList.remove('pointer-events-none');
    modal.classList.add('opacity-100');

    box.classList.remove('scale-95', 'opacity-0');
    box.classList.add('scale-100', 'opacity-100');
}

function closeFloorModal() {
    const modal = document.getElementById('floorModal');
    const box = document.getElementById('floorModalBox');

    modal.classList.remove('opacity-100');
    modal.classList.add('opacity-0', 'pointer-events-none');

    box.classList.remove('scale-100', 'opacity-100');
    box.classList.add('scale-95', 'opacity-0');
}
</script>

<script>

function openApartmentModal(floorId) {

    document.getElementById('floor_id_input').value = floorId;

    const modal = document.getElementById('apartmentModal');
    const box = document.getElementById('apartmentModalBox');

    modal.classList.remove('pointer-events-none');
    modal.classList.add('opacity-100');

    box.classList.remove('scale-95', 'opacity-0');
    box.classList.add('scale-100', 'opacity-100');
}

function closeApartmentModal() {

    const modal = document.getElementById('apartmentModal');
    const box = document.getElementById('apartmentModalBox');

    modal.classList.remove('opacity-100');
    modal.classList.add('opacity-0', 'pointer-events-none');

    box.classList.remove('scale-100', 'opacity-100');
    box.classList.add('scale-95', 'opacity-0');
}

</script>



<script>
function openEditApartmentModal(id, number, area, coords, status) {

    document.getElementById('edit_apartment_number').value = number;
    document.getElementById('edit_area').value = area ?? '';
    document.getElementById('edit_coords').value = coords ?? '';
    document.getElementById('edit_status').value = status;

    // action URL
    document.getElementById('editApartmentForm').action = `/admin/apartment/${id}`;

    const modal = document.getElementById('editApartmentModal');
    const box = document.getElementById('editApartmentModalBox');

    modal.classList.remove('pointer-events-none');
    modal.classList.add('opacity-100');

    box.classList.remove('scale-95', 'opacity-0');
    box.classList.add('scale-100', 'opacity-100');
}

function closeEditApartmentModal() {

    const modal = document.getElementById('editApartmentModal');
    const box = document.getElementById('editApartmentModalBox');

    modal.classList.remove('opacity-100');
    modal.classList.add('opacity-0', 'pointer-events-none');

    box.classList.remove('scale-100', 'opacity-100');
    box.classList.add('scale-95', 'opacity-0');
}
</script>
@endsection