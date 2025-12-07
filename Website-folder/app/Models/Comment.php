<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
   public $timestamps = false;

protected $guarded = [];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }
    public function product(){
        return $this->belongsTo(Products::class, 'product_id');
    }
}
