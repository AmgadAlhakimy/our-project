<?php

namespace App\Models;

use App\Models\Classroom\Classroom;
use App\Models\Student\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaving extends Model
{
    use HasFactory;

    protected $fillable = ['leaving', 'student_id', 'classroom_id','user_id'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }
}
