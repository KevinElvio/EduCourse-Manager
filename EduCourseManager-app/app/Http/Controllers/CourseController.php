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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required | max:255',
            'price' => 'required',
            'status' => 'required',
        ]);

        $status = $request->status === 'Active' ? 1 : 0;

        courses::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $status,
            'student_count' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('dashboard')->with('status', 'Course Created');
    }
}
