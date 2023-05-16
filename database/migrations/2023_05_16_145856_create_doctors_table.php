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
            $table->integer('centerId')->unsigned()->nullable();
            $table->integer('departmentId')->unsigned()->nullable();
            $table->string('image', 100)->nullable();
            $table->string('userName', 100)->nullable();
            $table->string('name', 100)->nullable();
            $table->string('sSN', 100)->nullable();
            $table->string('jobDescription', 100)->nullable();
            $table->string('abstract', 100)->nullable();
            $table->string('fullBrief', 250)->nullable();
            $table->integer('jobId')->nullable();
            $table->timestamp('birthDate')->nullable();
            $table->integer('experianceYears')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('phoneWorkId')->nullable();
            $table->integer('email')->nullable();
            $table->string('password', 100)->nullable();
            $table->integer('emailWorkId')->nullable();
            $table->string('address', 100)->nullable();
            $table->double('salary')->nullable();
            $table->string('gender', 100)->nullable();
            $table->string('nationality', 100)->nullable();
            $table->timestamps();

            $table->foreign('centerId')->references('id')->on('centers')->onDelete('cascade');
            $table->foreign('departmentId')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('jobId')->references('id')->on('jobs')->onDelete('cascade');
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
