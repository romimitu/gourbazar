<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable=['product_id','name','email','message'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
