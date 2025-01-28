<?php

namespace App\Exports;

use App\Models\registrations;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return registrations::all();
    }
}
