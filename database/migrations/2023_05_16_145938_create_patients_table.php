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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('centerId')->nullable();
            $table->unsignedBigInteger('insuranceCompanyId')->nullable();
            $table->string('image', 100)->nullable();
            $table->string('name', 100);
            $table->string('userName', 100)->nullable();
            $table->timestamp('birthDate');
            $table->string('sSN', 100)->nullable();
            $table->integer('phone')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('length', 100)->nullable();
            $table->string('weight', 100)->nullable();
            $table->string('bloodType', 100)->nullable();
            $table->string('gender', 4)->nullable();
            $table->string('nationality', 10)->nullable();
            $table->timestamps();

            $table->foreign('centerId')->references('id')->on('centers');
            $table->foreign('insuranceCompanyId')->references('id')->on('insurance_companies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
