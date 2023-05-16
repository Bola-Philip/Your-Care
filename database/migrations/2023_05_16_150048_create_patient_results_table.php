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
        Schema::create('patientResults', function (Blueprint $table) {
            $table->id();
            $table->string('labName', 100);
            $table->string('labPhone', 250);
            $table->string('result', 250);
            $table->timestamp('createdAt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patientResults');
    }
};
