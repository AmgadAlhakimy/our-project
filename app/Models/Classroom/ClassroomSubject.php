<?php

namespace App\Models\Classroom;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassroomSubject extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['classroom_id', 'subject_id','user_id'];
    protected $table = 'classroom_subject_pivot';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
