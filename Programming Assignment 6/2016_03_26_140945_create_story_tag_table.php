<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Story;
use App\Tag;

class CreateStoryTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    Schema::create('story_tag', function($table){
        $table->increments('id');
        $table->integer('story_id')->unsigned();
        $table->foreign('story_id')->references('id')->on('stories');
        $table->integer('tag_id')->unsigned();
        $table->foreign('tag_id')->references('id')->on('tags');
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
        //
        Schema::drop('story_tag');
    }
}
