<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubjectClassroom extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $table = 'subject_classroom_pivot';
    protected $fillable=['classroom_id','subject_id'];
}
