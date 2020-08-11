<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productStatus extends Model
{
    protected $fillable=['product_id','recomended','new','top_products','brand_new'];
}
