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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string("status");
            $table->string("fillOrFull");
            $table->integer("prize");
            $table->string("prizeCurrency");
            $table->foreignId("creatorId");
            $table->string("maxRank");
            $table->json("teamOnePlayers");
            $table->json("teamTwoPlayers");
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
        Schema::dropIfExists('tournaments');
    }
};
