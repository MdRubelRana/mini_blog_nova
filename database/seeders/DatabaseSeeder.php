<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Tag::factory(10)->create();
        \App\Models\Post::factory(20)->create();
        // \App\Models\Category::factory(10)->create();

        // \App\Models\Category::factory(10)->create([
        //     'name' => $this->faker->name(),
        //     // 'email' => 'test@example.com',
        // ]);
    }
}
