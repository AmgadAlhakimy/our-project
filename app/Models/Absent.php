<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Student\Student;

class Absent extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['absent','reason'];

    public function studnts(){
        return $this->belongsTo(Student::class,'student_id');
    }
}