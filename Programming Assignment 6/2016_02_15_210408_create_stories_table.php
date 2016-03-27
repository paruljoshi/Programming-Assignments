<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Location;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function(Blueprint $table){
		$table -> increments('id');
		$table -> string('title');
		$table -> string('story');
		$table -> boolean('published');
		$table -> timestamps();
        $table -> string('storytime');
        $table->integer('location_id')->unsigned();
        $table->foreign('location_id')->references('id')->on('locations');
    });        
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stories');
    }
}
