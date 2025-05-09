<?php

namespace App\Models\Classroom;

use App\Models\Absent;
use App\Models\Activity\Activity;
use App\Models\EducationalLevel;
use App\Models\Leaving;
use App\Models\Mark;
use App\Models\Student\Student;
use App\Models\Subject\Subject;
use App\Models\Teacher\Teacher;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Classroom extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    public array $translatable = ['name'];
    protected $fillable = ['name', 'edu_id','user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function level()
    {
        return $this->belongsTo(EducationalLevel::class, 'edu_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'classroom_subject_pivot');
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'classroom_teacher_pivot');
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'activity_classroom_pivot');
    }

    public function marks()
    {
        return $this->hasMany(Mark::class);
    }

    public function absent()
    {
        return $this->hasMany(Absent::class);
    }
    public function leaving()
    {
        return $this->hasMany(Leaving::class);
    }
}
