<?php

namespace App\Models\Subject;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubjectClassroom extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['subject_id','classroom_id'];
    protected $table = 'subject_classrooms_pivot';}
