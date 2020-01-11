<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // get the faker
        $faker = \Faker\Factory::create();
        
        // we create 60 post with the seeder
        for($i=1;$i<=60;$i++){
            // create the Article data
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph
            ]);
        }
    }
}
