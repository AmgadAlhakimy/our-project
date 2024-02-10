<?php

namespace App\Models\Teacher;

use App\Models\Classroom\Classroom;
use App\Models\Subject\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Teacher extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    protected $fillable= ['name','photo','gender','contact','address',
                          'qualification','salary','major','note'];

    public array $translatable = ['name','gender','address',
                                    'qualification','major'];
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'subject_teacher_pivot');
    }
    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class, 'classroom_teacher_pivot');
    }
}
