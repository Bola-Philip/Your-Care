<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pharmacy_product_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pharmacy_product_id');
            $table->string('image_path')->nullable();
            $table->timestamps();

            $table->foreign('pharmacy_product_id')->references('id')->on('pharmacy_products');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pharmacy_product_images');
    }
};
