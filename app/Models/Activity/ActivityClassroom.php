<?php

namespace App\Models\Activity;

use App\Models\Classroom\Classroom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityClassroom extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['activity_id','classroom_id'];
    protected $table = 'activity_classroom_pivot';

    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class, 'activity_classroom_pivot');
    }
}
