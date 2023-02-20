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
        Schema::create('game', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('idplatform');
            $table->date('release');
            $table->foreignId('idesrb');
            $table->string('developer');
            $table->string('publisher');
            $table->foreignId('idgenre1');
            $table->foreignId('idgenre2');
            $table->foreignId('idgenre3');
            $table->text('description');
            $table->decimal('price');
            $table->string('boxart');
            $table->timestamps();
            $table->foreign('idplatform')->references('id')->on('platform');
            $table->foreign('idesrb')->references('id')->on('esrb');
            $table->foreign('idgenre1')->references('id')->on('genre');
            $table->foreign('idgenre2')->references('id')->on('genre');
            $table->foreign('idgenre3')->references('id')->on('genre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game');
    }
};
