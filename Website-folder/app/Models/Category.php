<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $guarded = [];
    protected $timestamp = false;


    public function products()
    {
        return $this->hasMany(Products::class);
    }

    public function Authors()
    {
        return $this->hasMany(Author::class );
    }
}
