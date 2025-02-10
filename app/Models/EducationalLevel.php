<?php

namespace App\Models;

use App\Models\Classroom\Classroom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class EducationalLevel extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    protected $fillable = ['name','user_id'];
    public array $translatable = ['name'];

    public function classrooms(){
        return $this->hasMany(Classroom::class,'edu_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
