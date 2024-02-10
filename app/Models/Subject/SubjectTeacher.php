<?php

namespace App\Models\Subject;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubjectTeacher extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['subject_id','teacher_id'];
    protected $table = 'subject_teacher_pivot';
}
