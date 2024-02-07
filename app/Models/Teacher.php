<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Teacher extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    protected $fillable= ['name','photo','gender','contact','address',
                          'qualification','salary','major','note'];

    public array $translatable = ['name','gender','address',
                                    'qualification','major'];

}
