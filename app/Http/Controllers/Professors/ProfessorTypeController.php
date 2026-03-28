<?php

namespace App\Http\Controllers\Professors;

use App\Http\Controllers\Controller;
use App\Models\Professors\ProfessorType;
use Illuminate\Http\Request;

class ProfessorTypeController extends Controller
{
    public function index()
    {
        // Return a view or JSON response
        return ProfessorType::all();
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

        ProfessorType::create($data);

        return redirect()->route('professorTypes.index');
    }

    public function show(ProfessorType $professorType)
    {
        return $professorType;
    }

    public function edit(ProfessorType $professorType)
    {
        return view('professorTypes.edit', compact('professorType'));
    }

    public function update(Request $request, ProfessorType $professorType)
    {
        // Validate and update
        $data = $request->validate([
            // validation rules
        ]);

        $professorType->update($data);

        return redirect()->route('professorTypes.index');
    }

    public function destroy(ProfessorType $professorType)
    {
        $professorType->delete();

        return redirect()->route('professorTypes.index');
    }
}