<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'status',
        'students_count',
    ];

    public function registrations(){
        return $this->hasMany(courses::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
