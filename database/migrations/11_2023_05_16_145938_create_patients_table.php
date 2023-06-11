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
            $table->unsignedBigInteger('center_id')->nullable();
            $table->unsignedBigInteger('insurance_company_id')->nullable();
            $table->string('image_path')->nullable();
            $table->string('name')->nullable();
            $table->string('username');
            $table->timestamp('birth_date')->nullable();
            $table->string('ssn')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            $table->string('signature')->nullable();
            $table->string('address')->nullable();
            $table->string('length')->nullable();
            $table->string('weight')->nullable();
            $table->string('bloodType')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality');
            $table->timestamps();
            
            $table->foreign('center_id')->references('id')->on('centers')->onDelete('set null');
            $table->foreign('insurance_company_id')->references('id')->on('insurance_companies')->onDelete('set null');
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
