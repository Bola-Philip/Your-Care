<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('center_id');
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->float('payment_due')->nullable();
            $table->string('title')->nullable();
            $table->timestamp('real_time');
            $table->float('total_value')->nullable();
            $table->string('discount')->nullable();
            $table->string('tax')->nullable();
            $table->string('message')->nullable();

            $table->foreign('center_id')->references('id')->on('centers')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('set null');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('set null');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
