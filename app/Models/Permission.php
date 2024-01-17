<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'key', 'table_name'];

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }
    public static function generateFor($table_name)
    {
        self::firstOrCreate(['name'=>'Browse'.$table_name, 'key'=>'browse'.$table_name]);
    }
}
