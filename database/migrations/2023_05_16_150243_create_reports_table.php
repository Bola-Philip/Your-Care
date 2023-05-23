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
        Schema::create('reports', function (Blueprint $table) {
            $table->unsignedBigInteger('center_id');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('form_id');
            $table->timestamps();

            $table->foreign('center_id')->references('id')->on('samples')->onDelete('cascade');
            $table->foreign('doctor_id')->references('id')->on('samples')->onDelete('cascade');
            $table->foreign('patient_id')->references('id')->on('samples')->onDelete('cascade');
            $table->foreign('form_id')->references('id')->on('samples')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
