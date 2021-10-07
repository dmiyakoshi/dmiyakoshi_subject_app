<?php

namespace Database\Seeders;

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
        // \App\Models\Team::factory(10)->create();
        // \App\Models\Player::factory(50)->create();
        \App\Models\Sponser::factory(10)->create();
    }
}
