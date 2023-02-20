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
        Schema::create('esrb', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fullname');
            $table->string('age');
        });
        
        $game = new ESRB();
        $game->name = 'EC';
        $game->fullname = 'Early Childhood';
        $game->age = '3+';
        $game->save();
        $game = new ESRB();
        $game->name = 'E';
        $game->fullname = 'Everyone';
        $game->age = '6+';
        $game->save();
        $game = new ESRB();
        $game->name = 'E10+';
        $game->fullname = 'Everyone 10+';
        $game->age = '10+';
        $game->save();
        $game = new ESRB();
        $game->name = 'T';
        $game->fullname = 'Teen';
        $game->age = '13+';
        $game->save();
        $game = new ESRB();
        $game->name = 'M';
        $game->fullname = 'Mature';
        $game->age = '17+';
        $game->save();
        $game = new ESRB();
        $game->name = 'AO';
        $game->fullname = 'Adults Only';
        $game->age = '18+';
        $game->save();
        $game = new ESRB();
        $game->name = 'RP';
        $game->fullname = 'Rating Pending';
        $game->age = '?';
        $game->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('esrb');
    }
};
