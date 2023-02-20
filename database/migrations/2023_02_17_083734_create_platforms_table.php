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
        Schema::create('platform', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        
        $game = new Platform();
        $game->name = 'Play Station 5';
        $game->save();
        $game = new Platform();
        $game->name = 'Xbox Series X/S';
        $game->save();
        $game = new Platform();
        $game->name = 'Nintendo Switch';
        $game->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platform');
    }
};
