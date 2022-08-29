<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $table = "Lecturers";

    protected $fillable = [
        'LecturerName',
        'LecturerDept',
        'updated_at',
        'created_at'
    ];
}
