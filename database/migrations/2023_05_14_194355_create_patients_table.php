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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('imageId')->nullable();
            $table->timestamp('birthDate');
            $table->string('sSN', 100);
            $table->unsignedBigInteger('fileId')->nullable();
            $table->string('length', 100);
            $table->string('weight', 100);
            $table->string('bloodType', 100);
            $table->string('gender', 4);
            $table->string('nationality', 10);
            $table->timestamps();

            $table->foreign('imageId')->references('id')->on('images')->onDelete('cascade');
            $table->foreign('fileId')->references('id')->on('files')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
