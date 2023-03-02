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
        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->text('description');
            $table->foreignId('idgenre');
            $table->foreignId('idcategory');
            $table->foreignId('idbrand');
            $table->string('photo');
            $table->timestamps();
            $table->foreign('idgenre')->references('id')->on('genres');
            $table->foreign('idcategory')->references('id')->on('categories');
            $table->foreign('idbrand')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clothes');
    }
};
