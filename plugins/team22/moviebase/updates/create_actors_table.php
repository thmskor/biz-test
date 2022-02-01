<?php namespace Team22\MovieBase\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateActorsTable extends Migration
{
    public function up()
    {
        Schema::create('team22_moviebase_actors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('surname')->nullable();
            $table->date('birthday')->nullable();
            $table->string('slug');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('team22_moviebase_actors');
    }
}
