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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('imageId')->nullable();
            $table->foreign('imageId')->references('id')->on('images');
            $table->string('sSN', 100);
            $table->unsignedBigInteger('jobId');
            $table->foreign('jobId')->references('id')->on('jobs');
            $table->double('salaryPerHour');
            $table->double('totalSalary');
            $table->timestamp('birthDate')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
