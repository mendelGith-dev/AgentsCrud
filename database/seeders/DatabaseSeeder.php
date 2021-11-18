<?php

namespace Database\Seeders;

use App\Models\Agents;
use Database\Factories\AgentsFactory;
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
        //\App\Models\User::factory(10)->create();
        // \App\Models\AgentsModel::factory(10)->create();
        Agents::factory(10)->create();
        //$this->call(ZonesSeeder::class);
    }
}
