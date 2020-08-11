<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ecomuser extends Model
{
    protected $fillable= ['name','email','password','access_token'];
}
