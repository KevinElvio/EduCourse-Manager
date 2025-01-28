<?php

namespace App\Exports;

use App\Models\courses;
use Maatwebsite\Excel\Concerns\FromCollection;

class CourseExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return courses::all();
    }
}
