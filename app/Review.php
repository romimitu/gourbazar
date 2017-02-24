<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable=['name','email','message'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
