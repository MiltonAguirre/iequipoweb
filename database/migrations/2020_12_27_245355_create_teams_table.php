<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('teams', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('state');
          $table->unsignedInteger('game_id');
          $table->timestamps();
      });
      Schema::table('teams', function($table) {
        $table->foreign('game_id')->references('id')->on('games');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
