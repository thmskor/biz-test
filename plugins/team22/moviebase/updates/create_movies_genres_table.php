<?php namespace Team22\MovieBase\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMoviesGenresTable extends Migration
{
    public function up()
    {
        Schema::create('team22_moviebase_movies_genres', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('genre_id');
            $table->integer('movie_id');
            $table->primary(['genre_id','movie_id']);
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('team22_moviebase_movies_genres');
    }
}
