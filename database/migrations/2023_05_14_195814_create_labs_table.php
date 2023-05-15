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
            $table->unsignedBigInteger('imageId')->nullable();
            $table->string('website', 150)->nullable();
            $table->unsignedBigInteger('sampleId')->nullable();
            $table->unsignedBigInteger('centerId')->nullable();
            $table->foreign('imageId')->references('id')->on('image')->onDelete('set null');
            $table->foreign('sampleId')->references('id')->on('sample')->onDelete('set null');
            $table->foreign('centerId')->references('id')->on('center')->onDelete('set null');
            $table->timestamps();
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
