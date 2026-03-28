<?php

namespace App\Http\Controllers\Workspaces;

use App\Http\Controllers\Controller;
use App\Models\Workspaces\Workspace;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    public function index()
    {
        // Return a view or JSON response
        return Workspace::all();
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

        Workspace::create($data);

        return redirect()->route('workspaces.index');
    }

    public function show(Workspace $workspace)
    {
        return $workspace;
    }

    public function edit(Workspace $workspace)
    {
        return view('workspaces.edit', compact('workspace'));
    }

    public function update(Request $request, Workspace $workspace)
    {
        // Validate and update
        $data = $request->validate([
            // validation rules
        ]);

        $workspace->update($data);

        return redirect()->route('workspaces.index');
    }

    public function destroy(Workspace $workspace)
    {
        $workspace->delete();

        return redirect()->route('workspaces.index');
    }
}