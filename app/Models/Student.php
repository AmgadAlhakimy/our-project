<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    public $translatable = [
        'name',
        'address1',
        'address2',
        'sex',
        'place_of_birth',
        'take_medicine',
        'medicine_desc',
        'have_allergy',
        'allergy_desc',
        'have_health_problem',
        'health_problem_desc',
        'note',
        'classs_id'
    ];
    protected $fillable = [
        'name',
        'photo',
        'address1',
        'address2',
        'sex',
        'birthdate',
        'place_of_birth',
        'take_medicine',
        'medicine_desc',
        'have_allergy',
        'allergy_desc',
        'have_health_problem',
        'health_problem_desc',
        'note',
        'classs_id'
    ];
}
