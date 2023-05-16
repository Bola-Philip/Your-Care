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
            $table->unsignedBigInteger('center_id')->nullable();
            $table->string('image', 100)->nullable();
            $table->string('name', 100);
            $table->string('username', 100)->unique();
            $table->string('phone', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('ssn', 100);
            $table->double('salary_per_hour');
            $table->double('total_salary')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->timestamp('birth_date')->nullable();
            $table->string('gender', 100)->nullable();
            $table->string('nationality', 100)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('province', 100)->nullable();
            $table->string('zip_code', 100)->nullable();
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
