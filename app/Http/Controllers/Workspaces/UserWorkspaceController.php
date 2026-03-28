<?php

namespace App\Http\Controllers\Workspaces;

use App\Http\Controllers\Controller;
use App\Models\Workspaces\UserWorkspace;
use Illuminate\Http\Request;

class UserWorkspaceController extends Controller
{
    public function index()
    {
        // Return a view or JSON response
        return UserWorkspace::all();
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

        UserWorkspace::create($data);

        return redirect()->route('userWorkspaces.index');
    }

    public function show(UserWorkspace $userWorkspace)
    {
        return $userWorkspace;
    }

    public function edit(UserWorkspace $userWorkspace)
    {
        return view('userWorkspaces.edit', compact('userWorkspace'));
    }

    public function update(Request $request, UserWorkspace $userWorkspace)
    {
        // Validate and update
        $data = $request->validate([
            // validation rules
        ]);

        $userWorkspace->update($data);

        return redirect()->route('userWorkspaces.index');
    }

    public function destroy(UserWorkspace $userWorkspace)
    {
        $userWorkspace->delete();

        return redirect()->route('userWorkspaces.index');
    }
}