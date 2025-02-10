<?php

namespace App\Models\Student;

use App\Models\Absent;
use App\Models\Classroom\Classroom;
use App\Models\FollowUpChild;
use App\Models\Leaving;
use App\Models\Mark;
use App\Models\Parents\Parents;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    protected $fillable = ['id','name', 'photo', 'address', 'gender',
        'birthdate', 'place_of_birth',
        'takes_medicine', 'medicine_desc',
        'has_allergy', 'allergy_desc',
        'has_health_problem',
        'health_problem_desc', 'note',
        'classroom_id', 'parents_id','user_id'];

    public array $translatable = ['name', 'address', 'gender', 'place_of_birth',
        'takes_medicine', 'medicine_desc',
        'has_allergy', 'allergy_desc',
        'has_health_problem', 'health_problem_desc',];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parents()
    {
        return $this->belongsTo(Parents::class);
    }

    public function marks()
    {

        return $this->hasMany(Mark::class);
    }

    public function followUpChildren()
    {
        return $this->hasMany(FollowUpChild::class);
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
