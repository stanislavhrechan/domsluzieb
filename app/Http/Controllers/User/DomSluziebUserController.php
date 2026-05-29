<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Building;
use App\Models\Floor;
use App\Models\Apartment;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class DomSluziebUserController extends Controller
{
    public function index() {
        $buildings = Building::with(['floors.apartments'])->get();
        return view('index', compact('buildings'));
    }

    public function showFloor($floor)
    {
        $allowedFloors = ['1', '2', '3'];

        if (!in_array($floor, $allowedFloors)) {
            abort(404);
        }

        $floorModel = Floor::with('building')
            ->where('floor_number', $floor)
            ->firstOrFail();

        $floorMap = [
            '1' => 'A',
            '2' => 'A',
            '3' => 'B',
        ];

        $prefix = $floorMap[$floor] ?? 'A';

        $floorView = $prefix . '_floor_' . $floor;

        return view('podlazie', compact('floorView', 'floorModel'));
    }

    public function contact_send(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'tel' => 'nullable|string|max:30',
            'message' => 'required|string',
        ]);
        Mail::to('network.stanislav@gmail.com')->send(new ContactMail($data));
        return back()->with('success', 'Správa bola odoslaná');
    }


}
