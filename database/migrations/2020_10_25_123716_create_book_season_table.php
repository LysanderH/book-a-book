<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookSeasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_season', function (Blueprint $table) {
            $table->foreignId('book_id')->references('id')->on('book');
            $table->foreignId('season_id')->references('id')->on('season');
            $table->float('price', 5, 2);
            $table->float('public_price', 5, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_season');
    }
}
