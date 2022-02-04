<?php namespace Team22\MovieBase\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateMoviesTable extends Migration
{
    public function up()
    {
        Schema::table('team22_moviebase_movies', function ($table) {
            $table->string('year', 4);
        });
    }

    public function down()
    {
        Schema::table('team22_moviebase_movies', function ($table) {
            $table->dropColumn('year');
        });
    }
}