<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkTimesTable extends Migration
{
    public function up()
    {
        Schema::create('work_times', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('center_id');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('employee_id');
            $table->string('type')->nullable();
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->timestamps();

            $table->foreign('center_id')->references('id')->on('centers');
            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    public function down()
    {
        Schema::dropIfExists('work_times');
    }
}
