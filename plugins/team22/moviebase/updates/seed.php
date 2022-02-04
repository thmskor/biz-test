<?php namespace Team22\MovieBase\Updates;

use Team22\MovieBase\Models\Movie;
use October\Rain\Database\Updates\Seeder;
use Faker;

class SeedAllTables extends Seeder
{

    public function run() 
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 100; $i++) {
            Movie::create([
                'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'slug' => str_slug($faker->sentence($nbWords = 3, $variableNbWords = true), '-'),
                'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'year' => $faker->year($max = 'now')
            ]);
        }
    }
}
