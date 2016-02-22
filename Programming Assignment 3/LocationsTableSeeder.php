<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{

	public function run()
	{
	$fake = Faker\Factory::create();

	$limit= 20;

	for($i=0; $i< $limit; $i++){
		DB::table('locations')->insert([//,
			'value' => $faker -> city.','.$faker ->stateAbbr,
		]);
	}
	}
}
