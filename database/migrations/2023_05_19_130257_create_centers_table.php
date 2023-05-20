<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('name')->nullable();
            $table->string('username')->nullable();
            $table->string('logo_path')->nullable();
            $table->string('password')->nullable();
            $table->string('email')->nullable();
            $table->string('formalEmail')->nullable();
            $table->string('phone')->nullable();
            $table->string('formalPhone')->nullable();
            $table->string('website')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('province')->nullable();
            $table->string('zipCod')->nullable();
            $table->string('subscriptionType')->nullable();
            $table->string('subscriptionPeriod')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('snapcaht')->nullable();
            $table->string('youtube')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centers');
    }
}
