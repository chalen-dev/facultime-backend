<?php

namespace App\Http\Controllers\SessionGroups;

use App\Http\Controllers\Controller;
use App\Models\SessionGroups\SessionGroup;
use Illuminate\Http\Request;

class SessionGroupController extends Controller
{
    public function index()
    {
        // Return a view or JSON response
        return SessionGroup::all();
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

        SessionGroup::create($data);

        return redirect()->route('sessionGroups.index');
    }

    public function show(SessionGroup $sessionGroup)
    {
        return $sessionGroup;
    }

    public function edit(SessionGroup $sessionGroup)
    {
        return view('sessionGroups.edit', compact('sessionGroup'));
    }

    public function update(Request $request, SessionGroup $sessionGroup)
    {
        // Validate and update
        $data = $request->validate([
            // validation rules
        ]);

        $sessionGroup->update($data);

        return redirect()->route('sessionGroups.index');
    }

    public function destroy(SessionGroup $sessionGroup)
    {
        $sessionGroup->delete();

        return redirect()->route('sessionGroups.index');
    }
}