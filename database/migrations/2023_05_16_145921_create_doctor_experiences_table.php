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
            $table->id();
            $table->string('exName', 100);
            $table->string('workPlaceName', 100);
            $table->string('workPlaceCountry', 100);
            $table->timestamp('startedAt');
            $table->timestamp('finishedAt')->nullable();
            $table->boolean('stillWorks')->default(false);
            $table->timestamp('createdAt');

            $table->unsignedBigInteger('doctorId');
            $table->foreign('doctorId')->references('id')->on('doctors');
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
