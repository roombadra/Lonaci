<?php

namespace Database\Seeders;

use App\Models\Agence;
use App\Models\Agent;
use App\Models\Concessionnaires;
use App\Models\Maintenance;
use App\Models\Panne;
use App\Models\Produit;
use App\Models\Terminal;
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
        
        User::factory(1)->create();
        Agent::factory(10)->create();
        Agence::factory(50)->create();
        Produit::factory(50)->create();
        Concessionnaires::factory(50)->create();
        Panne::factory(50)->create();
        Terminal::factory(50)->create();
        Maintenance::factory(50)->create();
        
        
    }
}
