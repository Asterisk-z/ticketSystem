<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faculty;
use App\Models\Student;
use App\Models\Due;

class Department extends Model
{
    use HasFactory;

    protected $gaurded = [];

    public function faculty() {
        return $this->belongsTo(Faculty::class);
    }


    public function student() {
        return $this->hasMany(Student::class);
    }


    public function due() {
        return $this->hasMany(Due::class);
    }
}
