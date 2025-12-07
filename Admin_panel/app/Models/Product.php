<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public $timestamps = false;

   protected $fillable = [ 'title' , 'category_id' , 'slug' , 'price' , 'quantity' , 'discount', 'page_number' , 'language' , 'img_thumbnail'];

    public function comments()
    {
      return  $this->hasMany(Comments::class , 'product_id');
   }

   public function category(){
        return $this->belongsTo(Category::class , 'category_id' , 'id');
   }
}
