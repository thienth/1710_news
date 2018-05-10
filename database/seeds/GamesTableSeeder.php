<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $games = [];

        for ($i=0; $i < 2000; $i++) { 
        	$name = $faker->name;
        	$unit = [
        		'name' => $name,
        		'slug' => str_slug($name),
        		'cate_id' => rand(1, 4),
        		'feature_image' => $faker->imageUrl(800, 600, 'cats'),
        		'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 2000),
        		'description' => $faker->realText($maxNbChars = 200, $indexSize = rand(1, 5))
        	];
        	array_push($games, $unit);
        }

        DB::table('games')->insert($games);
    }
}
