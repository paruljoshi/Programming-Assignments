<?php

use Illuminate\Database\Seeder


class TagssTableSeeder extends Seeder
{

        public function run()
        {
                $fake = Faker\Factory::create();

                $limit= 20;

                for($i=0; $i< $limit; $i++){
                        DB::table('tags')->insert([//,
                                'value' => $str_random(10),
                        ]);
                }
        }
}
