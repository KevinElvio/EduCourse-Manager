<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = courses::paginate(10);
        return view('dashboard', compact('courses'));
    }

    public function read()
    {
        return view('addCourse');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required | max:255',
            'price' => 'required',
            'status' => 'required',
        ]);

        courses::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
            'student_count' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('dashboard')->with('status', 'Course Created');
    }

    public function edit($id)
    {
        $course = courses::findOrFail($id);
        return view('editCourse', compact('course'));
    }

    public function update(Request $request, int $id){
        $request->validate([
            'name' => 'required',
            'description' => 'required | max:255',
            'price' => 'required',
            'status' => 'required',
        ]);

        courses::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
            'student_count' => 0,
            'updated_at' => now(),
        ]);

        return redirect('dashboard')->with('status', 'Course Updated');
    }

    public function destroy( int $id)
    {
        $course = courses::findOrFail($id);
        $course->delete();

        return redirect()->back()->with('status', 'Book Delete');
    }
    
    
}
