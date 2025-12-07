<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $guarded = [];
    public $timestamps = false;

//    public function user()
//    {
//        return $this->belongsTo(User::class );
//    }

    public function category(){
        return $this->belongsTo(Category::class , 'category_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class , 'product_id')->where('status', 1);
    }
}




