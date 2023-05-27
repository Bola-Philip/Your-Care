<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {
            $table->id();
            $table->string('logo_path')->nullable();
            $table->string('name');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('country');
            $table->string('subscription_type');
            $table->string('subscription_period');
            $table->string('formal_email')->nullable();
            $table->string('phone')->nullable();
            $table->string('formal_phone')->nullable();
            $table->string('website')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('state')->nullable();
            $table->string('province')->nullable();
            $table->string('zipCod')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('snapchat')->nullable();
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
};
