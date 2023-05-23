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
        Schema::create('patientDiseaseMedia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('disease_id');
            $table->string('media_path');
            $table->timestamp('detection_date');
            $table->timestamps();

            $table->foreign('disease_id')->references('id')->on('patientDisease')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patientDiseaseMedia');
    }
};
