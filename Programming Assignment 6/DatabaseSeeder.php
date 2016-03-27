<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Location;
use App\Story;
use App\Tag;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LocationsTableSeeder::class);
        $this->call(StoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(StoryTagTableSeeder::class); 

        $this->call(UserTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(PurchaseTableSeeder::class);
        $this->call(SearchTableSeeder::class);
        $this->call(ReportTableSeeder::class); 

    }


}

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'building' =>$faker->buildingNumber,
                'street'=> $faker->streetAddress,
                'city' => $faker->city,
                'state' =>$faker->state,
                'country'=>$faker->country,
                'date_of_birth'=>$faker->date($format = 'Y-m-d', $max = 'now'),
                'phoneno'=>$faker->phonenumber,
                'zipcode'=>$faker->postcode,
                'image'=>$faker->imageUrl($width = 640, $height = 480),
                'quote'=>$faker->text,
                'status'=>$faker->boolean,
            ]);
        }
    }
}


class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('events')->insert([
                'name' => $faker->company,
                'desc' =>$faker->catchPhrase,
                'building' =>$faker->buildingNumber,
                'street'=> $faker->streetAddress,
                'city' => $faker->city,
                'state' =>$faker->state,
                'country'=>$faker->country,
                'ticket' => rand(0,5000),
                'ratings' => rand(1,5),
                'reviewed' =>rand(0,1),
                'addedByUser' => rand(0,1),

            ]);
        }
    }
}

class SearchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('searches')->insert([
                'event' => $faker->company,
                'city' => $faker->city,
                'state' =>$faker->state,
                'country'=>$faker->country,
            ]);
        }
    }
}

class ReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('reports')->insert([
                'description' => $faker->text,
                'reason' => $faker->text,
                'status' =>rand(0,1),
            ]);
        }
    }
}

class PurchaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('purchases')->insert([
                'cvv' => rand(100,999),
                'creditcardnumber' => $faker->creditCardNumber,
                'cardname' =>rand(0,1),
                'price' =>rand(0,1000),
                'expirydate'=> $faker->date($format = 'Y-m-d'),
                'address'=>$faker->address,
            ]);
        }
    }
}



class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();
        foreach (range(1,10) as $index) {
            // Location::create([
             //   'value' => $faker->city,
            //]);
            DB::table('locations')->insert([
                'value' => $faker->city,

            ]);
        }
    }
}

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();
         $locations = Location::get()->lists('id')->all();
        foreach (range(1,10) as $index) {
            DB::table('stories')->insert([
                'title' => $faker->city,
                'story' =>$faker->text,
                'published' => rand(0,1),
                'location_id' => $faker->randomElement($locations),
            ]);
        }
    }
}


class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('tags')->insert([
                'value' => $faker->city,

            ]);
        }
    }
}


class StoryTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();
         $stories = Story::get()->lists('id')->all();
         $tags = Tag::get()->lists('id')->all();
        foreach (range(1,10) as $index) {
            DB::table('story_tag')->insert([
                'story_id' => $faker->randomElement($stories),
                'tag_id' => $faker->randomElement($tags),
            ]);
        }
    }
}


