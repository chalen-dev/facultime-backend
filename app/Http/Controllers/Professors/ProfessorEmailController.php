<?php

namespace App\Http\Controllers\Professors;

use App\Http\Controllers\Controller;
use App\Models\Professors\ProfessorEmail;
use Illuminate\Http\Request;

class ProfessorEmailController extends Controller
{
    public function index()
    {
        return ProfessorEmail::all();
    }

    public function store(Request $request)
    {
        // Validate and store
        $data = $request->validate([
            // validation rules
        ]);

        return ProfessorEmail::create($data);
    }

    public function show(ProfessorEmail $professorEmail)
    {
        return $professorEmail;
    }

    public function update(Request $request, ProfessorEmail $professorEmail)
    {
        $data = $request->validate([
            // validation rules
        ]);

        $professorEmail->update($data);

        return $professorEmail;
    }

    public function destroy(ProfessorEmail $professorEmail)
    {
        $professorEmail->delete();

        return response()->noContent();
    }
}