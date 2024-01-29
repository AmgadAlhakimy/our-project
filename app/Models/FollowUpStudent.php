<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowUpStudent extends Model
{
    use HasFactory;


    protected $fillable = ['subject','comment','student_id'];
    protected $casts =[
        'subject' => 'array',
        'comment' => 'array',
    ];
}
