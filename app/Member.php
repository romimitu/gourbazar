<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable=['name', 'position', 'description','image','email','facebook','twitter'];
}
