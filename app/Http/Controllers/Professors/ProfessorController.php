<?php

namespace App\Http\Controllers\Professors;

use App\Http\Controllers\Controller;
use App\Models\Professors\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        // Return a view or JSON response
        return Professor::all();
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

        Professor::create($data);

        return redirect()->route('professors.index');
    }

    public function show(Professor $professor)
    {
        return $professor;
    }

    public function edit(Professor $professor)
    {
        return view('professors.edit', compact('professor'));
    }

    public function update(Request $request, Professor $professor)
    {
        // Validate and update
        $data = $request->validate([
            // validation rules
        ]);

        $professor->update($data);

        return redirect()->route('professors.index');
    }

    public function destroy(Professor $professor)
    {
        $professor->delete();

        return redirect()->route('professors.index');
    }
}