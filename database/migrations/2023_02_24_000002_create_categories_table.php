<?php

use App\Models\Category;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        
        $clothes = new Category();
        $clothes->name = 'T-shirts';
        $clothes->save();
        $clothes = new Category();
        $clothes->name = 'Bags';
        $clothes->save();
        $clothes = new Category();
        $clothes->name = 'Jackets';
        $clothes->save();
        $clothes = new Category();
        $clothes->name = 'Shoes';
        $clothes->save();
        $clothes = new Category();
        $clothes->name = 'Jumpers';
        $clothes->save();
        $clothes = new Category();
        $clothes->name = 'Jeans';
        $clothes->save();
        $clothes = new Category();
        $clothes->name = 'Sportwear';
        $clothes->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
