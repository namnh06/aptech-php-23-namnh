<?php

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
        $nam = Faker\Factory::create();
       
        for ($i = 0;$i < 10;$i++) {
            $name = $nam->name();
            $email = $nam->safeEmail;
            DB::table('users')->insert([
                "name" => $name,
                "email" => $email,
                "password" => bcrypt('123456')
            ]);
        }
    }
}