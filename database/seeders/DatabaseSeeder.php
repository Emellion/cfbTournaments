<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Emilio Irmscher',
            'email' => 'irmscheremilio@gmail.com',
            'password' => '$2y$10$lTzWDEA0RHa3IbRTe0ThKenmiaOaMgXcw6W825UqV6wiWcYlkw8oS',
            'rank' => 'diamond'
        ]);
    }
}
