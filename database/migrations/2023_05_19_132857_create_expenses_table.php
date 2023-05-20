<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('center_id');
            $table->string('title')->nullable();
            $table->string('expense_description')->nullable();
            $table->timestamps('real_time');
            $table->double('expense_value')->nullable();
            $table->string('accounting_code')->nullable();

            $table->foreign('center_id')->references('id')->on('centers');
            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
