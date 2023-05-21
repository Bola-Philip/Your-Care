<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacyProductsTable extends Migration
{
    public function up()
    {
        Schema::create('pharmacy_products', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('pharmacy_id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('details')->nullable();
            $table->float('price')->nullable();
            $table->integer('amount')->nullable();
            $table->timestamps();

            $table->foreign('pharmacy_id')->references('id')->on('pharmacies');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pharmacy_products');
    }
}
