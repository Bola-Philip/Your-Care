<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('client_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->float('cost')->nullable();
            $table->string('notes')->nullable();
            $table->boolean('paid')->default(0);
            $table->timestamps();
            // Add foreign key constraints if needed
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('client_services');
    }
};
