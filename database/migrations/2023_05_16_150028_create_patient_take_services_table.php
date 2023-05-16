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
        Schema::create('patientTakeServices', function (Blueprint $table) {
            $table->unsignedInteger('patientId');
            $table->foreign('patientId')->references('id')->on('patient');
            $table->unsignedInteger('serviceId');
            $table->foreign('serviceId')->references('id')->on('service');
            $table->unsignedInteger('doctorId')->nullable();
            $table->foreign('doctorId')->references('id')->on('doctor');
            $table->double('cost');
            $table->timestamp('date');
            $table->primary(['patientId', 'serviceId', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patientTakeServices');
    }
};
