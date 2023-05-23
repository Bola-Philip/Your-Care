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
        Schema::create('bookingRequests', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedBigInteger('center_id');
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('doctor_id');
            $table->string('title');
            $table->string('service_description');
            $table->timestamp('start_at');
            $table->timestamp('finish_at');
            $table->integer('rating')->nullable();
            $table->timestamps();

            $table->foreign('center_id')->references('id')->on('patients');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('doctor_id')->references('id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookingRequests');
    }
};
