<?php

namespace App\Imports;

use App\Models\courses;
use Maatwebsite\Excel\Concerns\ToModel;

class CourseImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new courses([
            'name' => $row[1],
            'description' => $row[2],
            'price' => $row[3],
            'status' => $row[4],
            'student_count' => $row[5],
            'created_at' => $row[6],
            'updated_at' => $row[7],
        ]);
    }
}
