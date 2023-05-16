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
            $table->increments('diseaseId');
            $table->string('result', 100);
            $table->timestamp('detectionDate');
            $table->timestamps();

            $table->foreign('diseaseId')->references('diseaseId')->on('patientDisease')
                ->onDelete('cascade')->onUpdate('cascade');
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
