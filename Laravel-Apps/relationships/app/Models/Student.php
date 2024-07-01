<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'email'];

    function profile() {
        return $this->hasOne(Profile::class);
    }

    function books() {
        return $this->hasMany(Book::class);
    }

    function exams() {
        return $this->belongsToMany(Exam::class);
    }

}
