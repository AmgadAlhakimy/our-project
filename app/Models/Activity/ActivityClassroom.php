<?php

namespace App\Models\Activity;

use App\Models\Classroom\Classroom;
use App\Models\User;
//use App\Models\Activity\Activity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityClassroom extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['activity_id', 'classroom_id', 'user_id'];
    protected $table = 'activity_classroom_pivot';

    // Relationship with Activity
    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id');
    }

    // Relationship with Classroom
    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
