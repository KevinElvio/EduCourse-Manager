<?php

namespace App\Http\Controllers;

use App\Exports\CourseExport;
use App\Imports\CourseImport;
use App\Models\courses;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


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

        return redirect('student')->with('status', 'Book Delete');
    }

    public function courseExport()
    {
        return Excel::download(new CourseExport, 'Course.xlsx');
    }

    public function courseImport(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:10240'
        ]);

        $file = $request->file('file');
        $nameFile = $file->getClientOriginalName();
        $file->move('DataCourse', $nameFile);
        Excel::import(new CourseImport, public_path('/DataCourse/' . $nameFile));
        return redirect('dashboard')->with('status', 'Course Imported');
    }

    public function cetakCourse()
    {
        $courses = courses::all();
        return view('cetakPDFCourse', compact('courses'));
    }
    
    
}
