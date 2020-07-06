<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
       
        for ($i = 0;$i < 10;$i++) {
            $name = $faker->name();
            $email = $faker->safeEmail;
            // DB::table('users')->insert([
            //     "name" => $name,
            //     "email" => $email,
            //     "password" => bcrypt('123456')
            // ]);
            User::create([
                "name" => $name,
                "email" => $email,
                "password" => bcrypt('123456')
            ]);
        }
    }
}