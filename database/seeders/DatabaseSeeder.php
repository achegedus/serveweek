<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        User::factory()->create([
            'name' => 'Adam Hegedus',
            'email' => 'adam@heged.us',
            'password' => '$2y$12$JJjoOCzG4kNtLmdFM1xgQuicDBo1VqzYHkK5S2DAG.JlzL.MquOqi' // password
        ]);
    }
}
