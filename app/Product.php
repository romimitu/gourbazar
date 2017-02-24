<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','description','price','category','promo_details','image','stock'];
    
    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
