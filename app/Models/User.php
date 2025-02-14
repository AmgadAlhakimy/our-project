<?php

namespace App\Models;

use App\Models\Parents\Parents;
use App\Models\Teacher\Teacher;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','roles_name','status',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'roles_name' => 'array',
    ];

    public function parent()
    {
        return $this->belongsTo(Parents::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function isParent()
    {
        return !is_null($this->parent_id);
    }

    public function isTeacher()
    {
        return !is_null($this->teacher_id);
    }

}
