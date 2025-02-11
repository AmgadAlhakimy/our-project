<?php

namespace App\Models\Teacher;

use App\Models\Classroom\Classroom;
use App\Models\Subject\Subject;
use App\Models\User;
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
                          'qualification','major','note','user_id'];

    public array $translatable = ['name','gender','address',
                                    'qualification','major'];
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'subject_teacher_pivot');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class, 'classroom_teacher_pivot');
    }
}
