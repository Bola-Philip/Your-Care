<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacyProductImageTable extends Migration
{
    public function up()
    {
        Schema::create('pharmacy_product_images', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('pharmacy_product_id');
            $table->string('image_path')->nullable();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('pharmacy_products');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pharmacy_product_images');
    }
}
