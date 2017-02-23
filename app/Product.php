<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','description','price','category','promo_details','image','stock'];
    
    public function reviews()
    {
        return $this->belongsTo(Review::class);
    }
}
