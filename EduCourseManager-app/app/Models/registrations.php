<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registrations extends Model
{
    use HasFactory;

    
    protected $table = 'registrations';

    protected $fillable = [
        'course_id',
        'student_id',
        'status',
        'created_at',
        'updated_at',
    ];

    public function courses(){
        return $this->belongsTo(courses::class, 'course_id');
    }
    public function users(){
        return $this->belongsTo(User::class, 'student_id');
    }
}
