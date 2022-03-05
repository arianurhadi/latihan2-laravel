<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Prophecy\Call\Call;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Student::factory(10)->create();
        // \App\Models\Category::factory(10)->create();

        \App\Models\Book::factory(10)->create();

        // $this->call(CategorySeeder::class);

    }
}
