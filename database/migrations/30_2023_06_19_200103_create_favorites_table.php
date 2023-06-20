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
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->boolean('favorite')->default(true);
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->unsignedBigInteger('center_id')->nullable();
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->unsignedBigInteger('pharmacy_id')->nullable();
            $table->unsignedBigInteger('lab_id')->nullable();
            $table->timestamp('created_at');

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('center_id')->references('id')->on('centers')->onDelete('set null');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('set null');
            $table->foreign('pharmacy_id')->references('id')->on('pharmacies')->onDelete('set null');
            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
