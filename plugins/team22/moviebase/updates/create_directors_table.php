<?php namespace Team22\MovieBase\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateDirectorsTable extends Migration
{
    public function up()
    {
        Schema::create('team22_moviebase_directors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('team22_moviebase_directors');
    }
}
