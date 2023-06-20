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
        Schema::create('patient_take_services', function (Blueprint $table) {
            $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('service_id')->nullable();
            $table->float('cost')->nullable();
            $table->string('detection_recommendations')->nullable();
            $table->timestamp('date');

            $table->foreign('booking_id')->references('id')->on('booking_requests')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('center_services')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_take_services');
    }
};
