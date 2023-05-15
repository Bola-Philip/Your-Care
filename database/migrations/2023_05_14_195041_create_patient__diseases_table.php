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
        Schema::create('patient_Diseases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patient')->onDelete('cascade');
            $table->string('disease_title', 100);
            $table->string('disease_description', 250);
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_Diseases');
    }
};
