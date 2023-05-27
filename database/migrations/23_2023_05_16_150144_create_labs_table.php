<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('labs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('center_id');
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('user_name');
            $table->string('password');
            $table->string('phone');
            $table->string('email');
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();

            $table->foreign('center_id')->references('id')->on('centers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labs');
    }
};