<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            [
                'name' => 'Nikola',
                'email' => 'nikola123@gmail.com',
                'password' => 'nikola123'
            ],
            [
                'name' => 'Darko',
                'email' => 'darko123@gmail.com',
                'password' => 'darko123'
            ],
            [
                'name' => 'Danijel',
                'email' => 'danijel123@gmail.com',
                'password' => 'danijel123'
            ],
            [
                'name' => 'Milos',
                'email' => 'milos123@gmail.com',
                'password' => 'milos123'
            ],
            [
                'name' => 'Jovan',
                'email' => 'jovan123@gmail.com',
                'password' => 'jovan123'
            ]
        ]);
    }
}
