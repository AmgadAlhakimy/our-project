<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Subject extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    public  $translatable=['name'];
    protected $fillable=['name'];

    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class,'subject_classroom_pivot');
    }

    public function marks()
    {
        return $this->hasMany(Mark::class);
    }
}
