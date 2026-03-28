<?php

namespace App\Http\Controllers\Rooms;

use App\Http\Controllers\Controller;
use App\Models\Rooms\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    public function index()
    {
        // Return a view or JSON response
        return RoomType::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Validate and store the new resource
        $data = $request->validate([
            // validation rules
        ]);

        RoomType::create($data);

        return redirect()->route('roomTypes.index');
    }

    public function show(RoomType $roomType)
    {
        return $roomType;
    }

    public function edit(RoomType $roomType)
    {
        return view('roomTypes.edit', compact('roomType'));
    }

    public function update(Request $request, RoomType $roomType)
    {
        // Validate and update
        $data = $request->validate([
            // validation rules
        ]);

        $roomType->update($data);

        return redirect()->route('roomTypes.index');
    }

    public function destroy(RoomType $roomType)
    {
        $roomType->delete();

        return redirect()->route('roomTypes.index');
    }
}