<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'status',
        'students_count',
        'created_at',
        'updated_at',
    ];

    public function registrations(){
        return $this->hasMany(courses::class);
    }

}
