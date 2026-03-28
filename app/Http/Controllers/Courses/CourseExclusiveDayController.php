<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Courses\CourseExclusiveDay;
use Illuminate\Http\Request;

class CourseExclusiveDayController extends Controller
{
    public function index()
    {
        // Return a view or JSON response
        return CourseExclusiveDay::all();
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

        CourseExclusiveDay::create($data);

        return redirect()->route('courseExclusiveDays.index');
    }

    public function show(CourseExclusiveDay $courseExclusiveDay)
    {
        return $courseExclusiveDay;
    }

    public function edit(CourseExclusiveDay $courseExclusiveDay)
    {
        return view('courseExclusiveDays.edit', compact('courseExclusiveDay'));
    }

    public function update(Request $request, CourseExclusiveDay $courseExclusiveDay)
    {
        // Validate and update
        $data = $request->validate([
            // validation rules
        ]);

        $courseExclusiveDay->update($data);

        return redirect()->route('courseExclusiveDays.index');
    }

    public function destroy(CourseExclusiveDay $courseExclusiveDay)
    {
        $courseExclusiveDay->delete();

        return redirect()->route('courseExclusiveDays.index');
    }
}