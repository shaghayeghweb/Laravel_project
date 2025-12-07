<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Article extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for($index = 1 ; $index < 20 ; $index++) {
            $title = $faker->text('40');
            DB::table('articles')->insert([
                "title" =>  $title,
                "body" => $faker->text('300') ,
                "slug" => Str::slug($title , '-'),
                "img_thumbnail" => "" ,
                "user_id" => rand(1,4) ,
                "category_id" => rand(1,5) ,
                "created_at" => $faker->dateTime() ,
                "updated_at" => Carbon::now() ,

                ]);
        }
    }
}
