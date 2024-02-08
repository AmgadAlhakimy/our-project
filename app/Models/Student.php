<?php

namespace App\Models;

use App\Models\Classroom\Classroom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    protected $fillable = ['name', 'photo', 'address', 'gender',
                            'birthdate', 'place_of_birth',
                            'medicine_desc', 'allergy_desc',
                            'health_problem_desc', 'note',
                            'classroom_id','relative_id'];

    public array $translatable = ['name', 'address', 'gender',
                                  'place_of_birth', 'medicine_desc',
                                  'allergy_desc', 'health_problem_desc',];
    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
    public function relative()
    {
        return $this->belongsTo(Relative::class);
    }
    public function marks(){

        return $this->hasMany(Mark::class);
    }public function followUpChildren(){

        return $this->hasMany(FollowUpChild::class);
    }
}
