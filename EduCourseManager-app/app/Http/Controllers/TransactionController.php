<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Models\registrations;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $courses = courses::all();
        return view('transaction', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email | unique:users',
            'password' => 'required',
            'course' => 'required',
            'date' => 'required',
            'status' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        registrations::create([
            'course_id' => $request->course,
            'student_id' => $user->id,
            'date' => $request->date,
            'status' => $request->status,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $course = courses::find($request->course);

        if ($course) {
            $course->student_count += 1;
            $course->save();
        }

        return redirect('student')->with('status', 'Student has been registered');
    }

    public function edit($id)
    {
        $registration = registrations::with('users')->findOrFail($id);
        $courses = courses::all();
        return view('editTransaction', compact('registration', 'courses'));
    }

    public function update(request $request, int $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'course' => 'required',
            'date' => 'required',
            'status' => 'required',
        ]);

        $registrations = registrations::findOrFail($id);
        $user = $registrations->users;
        if($user){
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        if($registrations->course_id != $request->course){
            $course = courses::find($registrations->course_id);
            if($course){
                $course->student_count -= 1;
                $course->save();
            }
            $course = courses::find($request->course);
            if($course){
                $course->student_count += 1;
                $course->save();
            }
        }

        $registrations->update([
            'course_id' => $request->course,
            'date' => $request->date,
            'status' => $request->status,
            'updated_at' => now(),
        ]);

        return redirect('student')->with('status', 'Student has been updated');
    }

    public function destroy(int $id){
        $registrations = registrations::findOrFail($id);
        $user = $registrations->users;
        if($user){
            $user->delete();
        }

        $course = courses::find($registrations->course_id);
        if($course){
            $course->student_count -= 1;
            $course->save();
        }

        $registrations->delete();

        return redirect('student')->with('status', 'Student has been deleted');
    }

}
