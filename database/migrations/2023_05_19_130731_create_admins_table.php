<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
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
            $table->string('username')->nullable();
            $table->string('name')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('email')->nullable();
            $table->string('password')->nullable();
            $table->string('permission')->nullable();
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
