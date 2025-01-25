<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddCourseController extends Controller
{
    public function index()
    {
        return view('addCourse');
    }

    // public function create()
    // {
    //     $data = request()->validate([
    //         'course_name' => 'required',
    //         'course_code' => 'required',
    //         'course_description' => 'required',
    //         'course_unit' => 'required',
    //         'course_level' => 'required',
    //         'course_semester' => 'required',
    //         'course_department' => 'required',
    //     ]);

    //     $course = new courses();
    //     $course->course_name = $data['course_name'];
    //     $course->course_code = $data['course_code'];
    //     $course->course_description = $data['course_description'];
    //     $course->course_unit = $data['course_unit'];
    //     $course->course_level = $data['course_level'];
    //     $course->course_semester = $data['course_semester'];
    //     $course->course_department = $data['course_department'];
    //     $course->save();

    //     return redirect('/dashboard');
    // }
}
