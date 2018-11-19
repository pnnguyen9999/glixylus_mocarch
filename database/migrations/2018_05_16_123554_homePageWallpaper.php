<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HomePageWallpaper extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallpapers',function(Blueprint $table){
            $table->increments('id');
            $table->string('imageURL');
            $table->string('nameOfimage');
            $table->string('descrition');
            $table->tinyInteger('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('wallpapers');
    }
}
