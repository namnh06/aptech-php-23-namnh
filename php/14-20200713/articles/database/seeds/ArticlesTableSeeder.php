<?php

use Illuminate\Database\Seeder;
use App\Article;
use Illuminate\Support\Str;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            // echo "Vong lap thu $i gia tri la: " . $faker->sentence(rand(4, 6), true) . PHP_EOL;
            $title = $faker->sentence(rand(4, 6), true);
            $slug = Str::slug($title, '-');
            $description = $faker->text(rand(100, 300));
            $content = $faker->text(rand(1000, 2500));
            // echo "$i : " . $slug . PHP_EOL;
            Article::create([
                'title' => $title,
                'slug' => $slug,
                'description' => $description,
                'content' => $content
            ]);
        }
    }
}