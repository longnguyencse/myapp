<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        // Let's truncate our existing records to start from scratch.
//        Article::truncate();
//
//        $faker = \Faker\Factory::create();
//
//        // And now, let's create a few articles in our database:
//        for ($i = 0; $i < 50; $i++) {
//            Article::create([
//                'title' => $faker->sentence,
//                'body' => $faker->paragraph,
//            ]);

//        }
        \App\Products::truncate();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 100; $i ++ ){
            \App\Products::create([
                'id' => $i,
               'name' => $faker->name(),
               'price' => $faker->randomFloat(2,0,1000000)
            ]);
        }
    }
}
