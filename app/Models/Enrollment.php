<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $table = "Enrollments";

    protected $fillable = [
        'StudentID',
        'CourseID',
        'updated_at',
        'created_at'
    ];
}
