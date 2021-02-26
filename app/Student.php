<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'name', 'job'
    ];
    // public static function getAll()
    // {
    //     return Student::all();
    // }
}
