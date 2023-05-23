<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseMediaTable extends Migration
{
    public function up()
    {
        Schema::create('expense_media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('expense_id');
            $table->string('media_path')->nullable();
            $table->timestamps();

            $table->foreign('expense_id')->references('id')->on('expenses');
        });
    }

    public function down()
    {
        Schema::dropIfExists('expense_media');
    }
}
