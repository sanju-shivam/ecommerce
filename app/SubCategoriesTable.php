<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoriesTable extends Model
{
    protected $fillable=['category_id','sub_category','sub_category_2'];
}
