<?php

namespace App\Http\Controllers\Rooms;

use App\Http\Controllers\Controller;
use App\Models\Rooms\RoomFloorLevel;
use Illuminate\Http\Request;

class RoomFloorLevelController extends Controller
{
    public function index()
    {
        return RoomFloorLevel::all();
    }

    public function store(Request $request)
    {
        // Validate and store
        $data = $request->validate([
            // validation rules
        ]);

        return RoomFloorLevel::create($data);
    }

    public function show(RoomFloorLevel $roomFloorLevel)
    {
        return $roomFloorLevel;
    }

    public function update(Request $request, RoomFloorLevel $roomFloorLevel)
    {
        $data = $request->validate([
            // validation rules
        ]);

        $roomFloorLevel->update($data);

        return $roomFloorLevel;
    }

    public function destroy(RoomFloorLevel $roomFloorLevel)
    {
        $roomFloorLevel->delete();

        return response()->noContent();
    }
}
