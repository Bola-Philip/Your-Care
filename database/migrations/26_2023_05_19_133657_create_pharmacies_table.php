<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('center_id')->nullable();
            $table->string('name')->nullable();
            $table->string('image_path')->nullable();
            $table->string('username')->nullable();
            $table->string('password');
            $table->string('email');
            $table->string('work_email')->nullable();
            $table->string('phone');
            $table->string('work_phone')->nullable();
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('province')->nullable();
            $table->string('zipCod')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('youtube')->nullable();
            $table->timestamps();

            $table->foreign('center_id')->references('id')->on('centers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pharmacies');
    }
};
