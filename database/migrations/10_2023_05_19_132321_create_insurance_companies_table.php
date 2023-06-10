<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('insurance_companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('center_id')->nullable();
            $table->string('logo_path')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('email')->nullable();
            $table->string('formal_email')->nullable();
            $table->string('phone')->nullable();
            $table->string('formal_phone')->nullable();
            $table->string('website')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('province')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('youtube')->nullable();
            $table->timestamps();

            $table->foreign('center_id')->references('id')->on('centers')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('insurance_companies');
    }
};
