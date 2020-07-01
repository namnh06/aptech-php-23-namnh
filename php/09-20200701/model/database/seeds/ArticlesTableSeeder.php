<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // for
        for ($i = 0;$i < 10;$i++) {
            $faker = Faker\Factory::create('vi_VN');
            DB::table('articles')->insert([
                'title' => $faker->text(50),
                'description' => $faker->text(200),
                'content' => $faker->text(200)
            ]);
        }
    }
}