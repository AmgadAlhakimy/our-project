<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Teacher extends Model
{
    use HasTranslations;
    use HasFactory;

    public $translatable=['name','sex','address','qualification','major'];
    protected $fillable= ['name','photo','sex','contact','address','qualification',
        'salary','major','note'];
}
