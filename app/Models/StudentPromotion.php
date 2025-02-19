<?php

namespace App\Models;

use App\Models\Classroom\Classroom;
use App\Models\Student\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPromotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'from_classroom_id',
        'to_classroom_id',
        'academic_year',
    ];

    // العلاقات مع الجداول الأخرى
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function fromClass()
    {
        return $this->belongsTo(Classroom::class, 'from_classroom_id');
    }

    public function toClass()
    {
        return $this->belongsTo(Classroom::class, 'to_classroom_id');
    }
}
