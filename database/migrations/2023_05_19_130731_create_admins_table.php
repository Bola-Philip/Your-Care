<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('center_id');
            $table->string('username');
            $table->string('name');
            $table->integer('phone');
            $table->string('email');
            $table->string('password');
            $table->string('permission');
            $table->timestamps();

            $table->foreign('center_id')->references('id')->on('centers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
