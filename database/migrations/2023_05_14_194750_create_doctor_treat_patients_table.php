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
        Schema::create('doctor_Treat_Patients', function (Blueprint $table) {
            $table->integer('doctorId')->unsigned();
            $table->integer('patientId')->unsigned();
            $table->timestamp('date')->nullable();
            $table->primary(['doctorId', 'patientId']);
            $table->foreign('doctorId')->references('id')->on('doctor')->onDelete('cascade');
            $table->foreign('patientId')->references('id')->on('patient')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_Treat_Patients');
    }
};
