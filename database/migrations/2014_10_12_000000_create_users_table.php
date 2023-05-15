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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('centerId')->nullable();
            $table->string('name', 100);
            $table->string('userName', 100);
            $table->string('password', 100);
            $table->unsignedBigInteger('phoneId')->nullable();
            $table->unsignedBigInteger('emailId')->nullable();
            $table->string('whoIs', 100);
            $table->string('address', 100);
            $table->string('country', 100);
            $table->string('city', 100);
            $table->string('province', 100);
            $table->string('zipCod', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
