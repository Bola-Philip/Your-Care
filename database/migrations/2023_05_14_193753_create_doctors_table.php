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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('imageId')->nullable();
            $table->foreign('imageId')->references('id')->on('images');
            $table->string('sSN', 100);
            $table->string('jobDescription', 100);
            $table->unsignedBigInteger('jobId');
            $table->foreign('jobId')->references('id')->on('jobs');
            $table->double('salary');
            $table->string('abstract', 100);
            $table->string('fullBrief', 250);
            $table->timestamp('birthDate')->nullable();
            $table->integer('experianceYears');
            $table->unsignedBigInteger('experianceId');
            $table->foreign('experianceId')->references('id')->on('experiances');
            $table->unsignedBigInteger('phoneWorkId');
            $table->foreign('phoneWorkId')->references('id')->on('phones');
            $table->unsignedBigInteger('emailWorkId');
            $table->foreign('emailWorkId')->references('id')->on('emails');
            $table->string('gender', 100);
            $table->string('nationality', 100);
            $table->unsignedBigInteger('departmentId');
            $table->foreign('departmentId')->references('id')->on('departments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
