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
        Schema::create('doctorExperiences', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('doctor_id');
            $table->string('experience_name');
            $table->string('work_place_name');
            $table->string('work_place_country');
            $table->timestamp('started_at');
            $table->timestamp('finished_at')->nullable();
            $table->boolean('still_works')->default(false);
            $table->timestamp('created_at');

            $table->foreign('doctor_id')->references('id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctorExperiences');
    }
};
