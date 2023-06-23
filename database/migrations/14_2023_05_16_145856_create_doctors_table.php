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
            $table->unsignedBigInteger('center_id')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->string('image_path')->nullable();
            $table->string('username')->nullable();
            $table->string('name')->nullable();
            $table->string('ssn')->nullable();
            $table->string('phone')->nullable();
            $table->string('work_phone')->nullable();
            $table->string('email');
            $table->string('specialty');
            $table->string('password');
            $table->string('work_email')->nullable();
            $table->string('job_description')->nullable();
            $table->string('abstract')->nullable();
            $table->string('full_brief', 250)->nullable();
            $table->integer('job_id')->nullable();
            $table->string('signature')->nullable();
            $table->timestamp('birth_date')->nullable();
            $table->integer('experience_years')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->double('salary')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->timestamps();

            $table->foreign('center_id')->references('id')->on('centers')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
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
