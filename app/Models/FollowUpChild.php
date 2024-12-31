<?php

namespace App\Models;

use App\Models\Student\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FollowUpChild extends Model
{   use HasFactory;
    use HasTranslations;


    protected $fillable = ['subject','homework', 'bath', 'snack',
                            'food','student_id','note'];
    protected $translatable = ['bath', 'snack', 'food'];
    protected $casts =[
        'subject' => 'array',
        'homework' => 'array',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
