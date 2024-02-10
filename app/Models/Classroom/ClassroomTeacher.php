<?php

namespace App\Models\Classroom;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassroomTeacher extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['classroom_id', 'teacher_id'];
    protected $table = 'classroom_teacher_pivot';

}
