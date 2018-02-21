<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cate_id');
            $table->string('product_name');
            $table->text('description')->nullable();
            $table->decimal('price')->nullable();
            $table->decimal('sale_price')->nullable();
            $table->integer('discount')->nullable();
            $table->string('image_link');
            $table->integer('create_by')->default('0');
            $table->integer('view')->default('0');
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
        Schema::dropIfExists('products');
    }
}
