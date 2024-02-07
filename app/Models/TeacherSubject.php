<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherSubject extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['teacher_id','subject_id'];
    protected $table = 'teacher_subjects_pivot';
}
