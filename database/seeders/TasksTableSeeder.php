<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'name' => 'Create header'
            ],
            [
                'name' => 'Create main content'
            ],
            [
                'name' => 'Create footer'
            ],
            [
                'name' => 'Create gallery'
            ],
            [
                'name' => 'Create sidebar'
            ]
        ]);
    }
}
