<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use mysql_xdevapi\Table;
use Spatie\Translatable\HasTranslations;

class Classs extends Model
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
}
