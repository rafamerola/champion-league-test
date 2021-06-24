<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('house_team_id')->unsigned();
            $table->integer('guest_team_id')->unsigned();
            $table->string('score_house_team');
            $table->string('score_guest_team');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('house_team_id')->references('id')->on('teams');
            $table->foreign('guest_team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['house_team_id']);
        $table->dropForeign(['guest_team_id']);
        Schema::dropIfExists('matches');
    }
}
