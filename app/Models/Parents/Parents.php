<?php

namespace App\Models\Parents;

use App\Models\Student\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Parents extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    public $translatable = ['father_name', 'father_work',
        'mother_name', 'mother_work',
        'kin_name', 'kin_relationship',];

    protected $fillable = ['father_name', 'father_work',
        'father_contact1', 'father_contact2',
        'mother_name', 'mother_work', 'mother_contact1',
        'mother_contact2', 'kin_name',
        'kin_relationship', 'kin_contact'];

    public function students()
    {
        return $this->hasMany(Student::class, 'parents_id');
    }
}
