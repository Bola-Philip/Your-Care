<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('invoiced_services', function (Blueprint $table) {
            $table->unsignedBigInteger('invoice_id');
            $table->unsignedBigInteger('client_service_id')->nullable();
            $table->unsignedBigInteger('center_service_id')->nullable();
            $table->timestamps();

            $table->foreign('invoice_id')->references('id')->on('invoices');
            $table->foreign('client_service_id')->references('id')->on('client_services');
            $table->foreign('center_service_id')->references('id')->on('center_services');
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoiced_services');
    }
};
