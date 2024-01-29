<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Classroom extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    public $translatable=['name'];
    protected $fillable=['name','cost','edu_id'];

    public function scopeCost($query){

        return $query->where('cost',100);
    }
    public function level(){
        return $this->belongsTo(EducationalLevel::class,'edu_id');
    }
    public function students(){
        return $this->hasMany(Student::class,'classroom_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'subject_classroom_pivot');
    }
}
