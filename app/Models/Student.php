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

    protected $fillable = ['name', 'photo', 'address', 'gender',
                            'birthdate', 'place_of_birth',
                            'medicine_desc', 'allergy_desc',
                            'health_problem_desc', 'note', 'class_id'];

    public array $translatable = ['name', 'address', 'gender',
                                  'place_of_birth', 'medicine_desc',
                                  'allergy_desc', 'health_problem_desc',];
    public function classes(){
        return $this->belongsTo(Classs::class,'class_id');
    }
}
