<?php

namespace App\Imports;

use App\Models\registrations;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $user = User::find($row[2]);

        if (!$user) {
            $user = User::create([
                'id' => $row[2],
                'name' => 'Default Name',
                'email' => 'default' . $row[2] . '@example.com',
                'password' => Hash::make('password'), 
            ]);
        }

        return new registrations([
            'course_id' => $row[1],
            'student_id' => $user->id,
            'status' => $row[3],
            'created_at' => $row[4],
            'updated_at' => $row[5],
        ]);
    }
}
