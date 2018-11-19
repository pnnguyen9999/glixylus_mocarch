<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Article extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article',function(Blueprint $table){
            $table->increments('id');
            $table->string('type');
            $table->string('title');
            $table->string('description');
            $table->string('content');
            $table->string('post_mode'); // save or post now
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
        Schema::drop('article');
    }
}
