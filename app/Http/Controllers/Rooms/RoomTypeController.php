<?php

namespace App\Http\Controllers\Rooms;

use App\Http\Controllers\Controller;
use App\Models\Rooms\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    public function index()
    {
        return RoomType::all();
    }

    public function store(Request $request)
    {
        // Validate and store
        $data = $request->validate([
            // validation rules
        ]);

        return RoomType::create($data);
    }

    public function show(RoomType $roomType)
    {
        return $roomType;
    }

    public function update(Request $request, RoomType $roomType)
    {
        $data = $request->validate([
            // validation rules
        ]);

        $roomType->update($data);

        return $roomType;
    }

    public function destroy(RoomType $roomType)
    {
        $roomType->delete();

        return response()->noContent();
    }
}
