<?php

namespace App\Models\activity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Activity extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable=['name','location','phone','date'];
    public $translatable = ['name','location'];
}
