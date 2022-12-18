<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('detalis');
            $table->string('slug');
            $table->boolean('status');
            $table->bigInteger('brand_id')->unsigned()->nullable();
             $table->foreign('brand_id')
                 ->references('id')
                 ->on('brands')
                 ->onDelete('cascade');
            $table->bigInteger('category_id')->unsigned();
             $table->foreign('category_id')
                 ->references('id')
                 ->on('categoris')
                 ->onDelete('cascade');
            $table->string('stock_method');
            $table->string('purchase_price');
            $table->string('rental_price');
            $table->string('barcode');
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
