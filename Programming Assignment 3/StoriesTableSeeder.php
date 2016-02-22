<?php

use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{

        public function run()
        {
        $fake = Faker\Factory::create();

        $limit= 20;

        for($i=0; $i< $limit; $i++){
                DB::table('stories')->insert([//,
                        'title' => str_random(10),
			'story' => str_random(10),
                ]);
        }
        }
}
