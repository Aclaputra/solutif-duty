<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = "Courses";

    protected $fillable = [
        'CourseName',
        'LecturerID',
        'updated_at',
        'created_at'
    ];
}
