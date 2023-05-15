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
        Schema::create('patient_Take_Services', function (Blueprint $table) {
            $table->increments('patientId');
            $table->integer('serviceId')->unsigned();
            $table->timestamp('date')->nullable();
            $table->unique(['patientId', 'serviceId']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_Take_Services');
    }
};
