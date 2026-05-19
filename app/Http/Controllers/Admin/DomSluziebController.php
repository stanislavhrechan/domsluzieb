<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Building;
use App\Models\Floor;
use App\Models\Apartment;
class DomSluziebController extends Controller
{
    public function index(){
        $builds = Building::get();
        return view('admin.index', compact('builds'));
    }

    public function show_floors(Building $building) {
        $floors = $building->floors()->get();
        return view('admin.floors', compact('building', 'floors'));
    }

    public function store_floor(Request $request)
    {
        $request->validate([
            'building_id' => 'required|exists:buildings,id',
            'floor_number' => 'required|integer',
        ]);

        Floor::create([
            'building_id' => $request->building_id,
            'floor_number' => $request->floor_number,
        ]);

        return back();
    }

    public function storeApartment(Request $request) {
        $request->validate([
            'floor_id' => 'required|exists:floors,id',
            'apartment_number' => 'required',
            'rooms' => 'nullable|integer',
            'area' => 'nullable|numeric',
            'status' => 'required',
        ]);

        Apartment::create([
            'floor_id' => $request->floor_id,
            'apartment_number' => $request->apartment_number,
            'rooms' => $request->rooms,
            'area' => $request->area,
            'status' => $request->status,
        ]);

        return back();
    }
}
