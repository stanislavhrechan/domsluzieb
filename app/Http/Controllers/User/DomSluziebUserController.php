<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Building;
use App\Models\Floor;
use App\Models\Apartment;
class DomSluziebUserController extends Controller
{

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
}
