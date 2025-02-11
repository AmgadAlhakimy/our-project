<?php

namespace App\Models\Subject;

use App\Models\Classroom\Classroom;
use App\Models\Mark;
use App\Models\Teacher\Teacher;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Subject extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    public array $translatable = ['name'];
    protected $fillable = ['name','user_id'];

    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class, 'classroom_subject_pivot');
    }
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'subject_teacher_pivot');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function marks()
    {
        return $this->hasMany(Mark::class);
    }
}
