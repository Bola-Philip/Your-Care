<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCenterServicesTable extends Migration
{
    public function up()
    {
        Schema::create('center_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('center_id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->double('price')->nullable();
            $table->timestamps();

            $table->foreign('center_id')->references('id')->on('centers');
        });
    }

    public function down()
    {
        Schema::dropIfExists('center_services');
    }
}
