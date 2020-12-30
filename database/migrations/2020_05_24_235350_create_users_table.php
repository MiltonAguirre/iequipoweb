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
        $table->string('email')->unique();
        $table->string('nick')->unique();
        $table->string('password');
        $table->string('role');
        $table->unsignedInteger('data_user_id');
        $table->rememberToken();
        $table->timestamps();
      });
      Schema::table('users', function($table) {
        $table->foreign('data_user_id')->references('id')->on('data_users')->onDelete('cascade');
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
