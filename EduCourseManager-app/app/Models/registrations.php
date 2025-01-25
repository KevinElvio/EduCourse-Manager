<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registrations extends Model
{
    use HasFactory;

    
    protected $table = 'registrations';

    protected $fillable = [
        'name',
        'description',
        'price',
        'status',
        'students_count',
    ];

    public function courses(){
        return $this->belongsTo(courses::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}
