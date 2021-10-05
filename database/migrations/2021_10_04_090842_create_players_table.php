<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('player_id');
            $table->string('name');
            $table->float('height');
            $table->float('weight');
            $table->integer('age');
            $table->integer('salary');
            $table->integer('year_enrolled');
            $table->integer('team_id')->unsigned()->default(1);
            $table->timestamps();
            
            $table->foreign('team_id')
                ->references('team_id')
                ->on('teams')
                ->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
