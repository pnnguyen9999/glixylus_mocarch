<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImagestoreCopy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imageStore',function(Blueprint $table){
            $table->increments('id');
            $table->string('nameOfimage');
            $table->string('title')->default('unknown');
            $table->string('description')->default('unknown');
            $table->integer('size');
            $table->string('imageURL');
            $table->string('imagePath');
            $table->string('type')->default('image');
            $table->string('notes')->default('none');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imageStore');
    }
}
