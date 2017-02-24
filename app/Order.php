<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['name','address_one','address_two','mobile','email','product_name','quantities','price'];
}
