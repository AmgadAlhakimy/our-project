<?php

namespace App\Models\Activity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Activity extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;


    protected $fillable=['name','location','contact','date'];
    protected array $translatable = ['name','location'];
}
