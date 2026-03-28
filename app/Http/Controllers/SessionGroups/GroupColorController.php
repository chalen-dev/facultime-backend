<?php

namespace App\Http\Controllers\SessionGroups;

use App\Http\Controllers\Controller;
use App\Models\SessionGroups\GroupColor;
use Illuminate\Http\Request;

class GroupColorController extends Controller
{
    public function index()
    {
        // Return a view or JSON response
        return GroupColor::all();
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

        GroupColor::create($data);

        return redirect()->route('groupColors.index');
    }

    public function show(GroupColor $groupColor)
    {
        return $groupColor;
    }

    public function edit(GroupColor $groupColor)
    {
        return view('groupColors.edit', compact('groupColor'));
    }

    public function update(Request $request, GroupColor $groupColor)
    {
        // Validate and update
        $data = $request->validate([
            // validation rules
        ]);

        $groupColor->update($data);

        return redirect()->route('groupColors.index');
    }

    public function destroy(GroupColor $groupColor)
    {
        $groupColor->delete();

        return redirect()->route('groupColors.index');
    }
}