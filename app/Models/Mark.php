<?php

namespace App\Models;

use App\Models\Classroom\Classroom;
use App\Models\Student\Student;
use App\Models\Subject\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mark extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['exam','homework','oral','behavior','total',
                            'rate','average','student_id','subject_id'];
    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
