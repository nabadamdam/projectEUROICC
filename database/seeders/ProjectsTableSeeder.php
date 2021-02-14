<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('projects')->insert([
           [
            'name' => 'Develop site'
           ],
           [
            'name' => 'Develop application'
           ],
           [
            'name' => 'Develop API'
           ],
           [
            'name' => 'Design for site'
           ],
           [
            'name' => 'Create database'
           ]
       ]);
    }
}
