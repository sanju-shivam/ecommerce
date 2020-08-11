<?php

namespace App\add_to_carts;

use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
	protected $fillable=['product_id','user_id','session_id','product_name','product_image','quantity','product_price'];
}
