<?php

namespace App\Http\Controllers;

use App\Models\registrations;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = registrations::with('users','courses')->paginate(10);

        return view('student', compact('students'));
    }
}
