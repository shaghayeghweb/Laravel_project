<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $guarded = [];

    protected $fillable=[ 'name',
    'email',
    'password'];

    public function profile()
    {
        return $this->hasOne(Profile::class , 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class , 'user_id');
    }

}
