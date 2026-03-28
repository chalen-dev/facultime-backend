<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Courses\ClassType;
use Illuminate\Http\Request;

class ClassTypeController extends Controller
{
    public function index()
    {
        // Return a view or JSON response
        return ClassType::all();
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

        ClassType::create($data);

        return redirect()->route('classTypes.index');
    }

    public function show(ClassType $classType)
    {
        return $classType;
    }

    public function edit(ClassType $classType)
    {
        return view('classTypes.edit', compact('classType'));
    }

    public function update(Request $request, ClassType $classType)
    {
        // Validate and update
        $data = $request->validate([
            // validation rules
        ]);

        $classType->update($data);

        return redirect()->route('classTypes.index');
    }

    public function destroy(ClassType $classType)
    {
        $classType->delete();

        return redirect()->route('classTypes.index');
    }
}