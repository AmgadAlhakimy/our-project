<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FollowUpChild extends Model
{   use HasFactory;
    use HasTranslations;


    protected $fillable = ['subject','comment', 'bath', 'snack', 'food','student_id','note'];
    protected $translatable = ['bath', 'snack', 'food'];
    protected $casts =[
        'subject' => 'array',
        'comment' => 'array',
    ];
}
