<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Courses;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Teachers::factory(5)->create();
        Courses::factory(5)->create();
        Students::factory(5)->create();
        User::factory(5)->create();
    }
}
