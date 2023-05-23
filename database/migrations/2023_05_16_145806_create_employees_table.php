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
            $table->unsignedBigInteger('center_id');
            $table->unsignedBigInteger('department_id')->nullable();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('username')->unique();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('ssn')->nullable();
            $table->double('salary_per_hour')->nullable();
            $table->double('total_salary')->nullable();
            $table->timestamp('birth_date')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('zip_code')->nullable();
            $table->timestamps();

            $table->foreign('center_id')->references('id')->on('centers');
            $table->foreign('department_id')->references('id')->on('departments');
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
