<?php

namespace App\Http\Controllers\Professors;

use App\Http\Controllers\Controller;
use App\Models\Professors\ProfessorPosition;
use Illuminate\Http\Request;

class ProfessorPositionController extends Controller
{
    public function index()
    {
        // Return a view or JSON response
        return ProfessorPosition::all();
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

        ProfessorPosition::create($data);

        return redirect()->route('professorPositions.index');
    }

    public function show(ProfessorPosition $professorPosition)
    {
        return $professorPosition;
    }

    public function edit(ProfessorPosition $professorPosition)
    {
        return view('professorPositions.edit', compact('professorPosition'));
    }

    public function update(Request $request, ProfessorPosition $professorPosition)
    {
        // Validate and update
        $data = $request->validate([
            // validation rules
        ]);

        $professorPosition->update($data);

        return redirect()->route('professorPositions.index');
    }

    public function destroy(ProfessorPosition $professorPosition)
    {
        $professorPosition->delete();

        return redirect()->route('professorPositions.index');
    }
}