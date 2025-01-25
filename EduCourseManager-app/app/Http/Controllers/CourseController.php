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

    public function create()
    {
        
    }

}
