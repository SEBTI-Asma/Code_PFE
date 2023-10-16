<?php

namespace Database\Seeders;

use App\Models\Action;
use App\Models\AdresseDestination;
use App\Models\AdresseSource;
use App\Models\Demande;
use App\Models\Departement;
use App\Models\Duree;
use App\Models\Fluxe;
use App\Models\Protocole;
use App\Models\SousDepartement;
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
        $this->call(DepartementSeeder::class);
        $this->call(SousDepartementSeeder::class);
        User::factory(10)->create();
        Demande::factory(10)->create();
        $this->call(ProtocoleSeeder::class);
        Fluxe::factory(10)->create();
        Duree::factory(10)->create();
        AdresseSource::factory(10)->create();
        AdresseDestination::factory(10)->create();
        Action::factory(10)->create();
    }
}
