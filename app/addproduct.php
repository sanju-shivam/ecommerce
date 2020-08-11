<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addproduct extends Model
{
	protected $fillable = ['product_name','catagery_id','subcategory_id','super_subcategory_id','product_rate','product_category','product_image','product_quantity'];
}
