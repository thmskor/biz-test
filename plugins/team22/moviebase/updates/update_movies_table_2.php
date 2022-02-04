<?php namespace Team22\MovieBase\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateMoviesTable2 extends Migration
{
    public function up()
    {
        Schema::table('team22_moviebase_movies', function ($table) {
            $table->string('popular', 1);
        });
    }

    public function down()
    {
        Schema::table('team22_moviebase_movies', function ($table) {
            $table->dropColumn('popular');
        });
    }
}