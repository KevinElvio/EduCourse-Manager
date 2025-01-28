<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use App\Imports\StudentImport;
use App\Models\registrations;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function index(){
        $students = registrations::with('users','courses')->paginate(10);

        return view('student', compact('students'));
    }

    public function studentExport()
    {
        return Excel::download(new StudentExport, 'Student.xlsx');
    } 

    public function studentImport(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:10240'
        ]);

        $file = $request->file('file');
        $nameFile = $file->getClientOriginalName();
        $file->move('DataCourse', $nameFile);
        Excel::import(new StudentImport, public_path('/DataCourse/' . $nameFile));
        return redirect('dashboard')->with('status', 'Course Imported');
    }
}
