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
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        
        $game = new Genre();
        $game->name = 'Action';
        $game->save();
        $game = new Genre();
        $game->name = 'Adventure';
        $game->save();
        $game = new Genre();
        $game->name = "Beat'em Up";
        $game->save();
        $game = new Genre();
        $game->name = 'Board Game';
        $game->save();
        $game = new Genre();
        $game->name = 'Casino';
        $game->save();
        $game = new Genre();
        $game->name = 'Construction and Management Simulation';
        $game->save();
        $game = new Genre();
        $game->name = 'Education';
        $game->save();
        $game = new Genre();
        $game->name = 'Fighting';
        $game->save();
        $game = new Genre();
        $game->name = 'Flight Simulation';
        $game->save();
        $game = new Genre();
        $game->name = 'Life Simulation';
        $game->save();
        $game = new Genre();
        $game->name = 'MMO';
        $game->save();
        $game = new Genre();
        $game->name = 'Music';
        $game->save();
        $game = new Genre();
        $game->name = 'Party';
        $game->save();
        $game = new Genre();
        $game->name = 'Platform';
        $game->save();
        $game = new Genre();
        $game->name = 'Puzzle';
        $game->save();
        $game = new Genre();
        $game->name = 'Quiz';
        $game->save();
        $game = new Genre();
        $game->name = 'Racing';
        $game->save();
        $game = new Genre();
        $game->name = 'Role-Playing';
        $game->save();
        $game = new Genre();
        $game->name = 'Sandbox';
        $game->save();
        $game = new Genre();
        $game->name = 'Shooter';
        $game->save();
        $game = new Genre();
        $game->name = 'Sports';
        $game->save();
        $game = new Genre();
        $game->name = 'Stealth';
        $game->save();
        $game = new Genre();
        $game->name = 'Strategy';
        $game->save();
        $game = new Genre();
        $game->name = 'Vehicle Simulation';
        $game->save();
        $game = new Genre();
        $game->name = 'Visual Novel';
        $game->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genres');
    }
};
