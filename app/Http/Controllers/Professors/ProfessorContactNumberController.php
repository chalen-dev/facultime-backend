<?php

namespace App\Http\Controllers\Professors;

use App\Http\Controllers\Controller;
use App\Models\Professors\ProfessorContactNumber;
use Illuminate\Http\Request;

class ProfessorContactNumberController extends Controller
{
    public function index()
    {
        // Return a view or JSON response
        return ProfessorContactNumber::all();
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

        ProfessorContactNumber::create($data);

        return redirect()->route('professorContactNumbers.index');
    }

    public function show(ProfessorContactNumber $professorContactNumber)
    {
        return $professorContactNumber;
    }

    public function edit(ProfessorContactNumber $professorContactNumber)
    {
        return view('professorContactNumbers.edit', compact('professorContactNumber'));
    }

    public function update(Request $request, ProfessorContactNumber $professorContactNumber)
    {
        // Validate and update
        $data = $request->validate([
            // validation rules
        ]);

        $professorContactNumber->update($data);

        return redirect()->route('professorContactNumbers.index');
    }

    public function destroy(ProfessorContactNumber $professorContactNumber)
    {
        $professorContactNumber->delete();

        return redirect()->route('professorContactNumbers.index');
    }
}