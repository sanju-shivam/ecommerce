<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addproducts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->integer('catagery_id');
            $table->integer('subcategory_id');
            $table->integer('super_subcategory_id')->nullable();
            $table->decimal('product_rate', 6, 2);
            $table->string('product_category');
            $table->string('product_image');
            $table->integer('product_quantity');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addproducts');
    }
}
