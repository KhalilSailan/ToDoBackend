<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory(5)->create([
        //     'first_name' => 'Test User',
        //     'last_name' => 'Test User',
        //     'avatar' => fake()->filePath(),
        //     'email' => fake()->email(),
        // ]);

        $this->call([
            StatusSeeder::class,
        ]);
    }
}