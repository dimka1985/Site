<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('company', 50)->nullable();
            $table->string('phone', 12)->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->unsignedInteger('socialprovider_id')->nullable();
            $table->foreign('socialprovider_id')->references('id')->on('socialproviders');
            $table->string('socialuser_id')->nullable();
            $table->string('socialuser_email')->nullable();
            $table->string('socialuser_avatar')->nullable();
            $table->string('avatar')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
