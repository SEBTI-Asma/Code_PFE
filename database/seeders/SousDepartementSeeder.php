<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SousDepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("sous_departements")->insert([
            ["nomsd"=>"Architecture"],
            ["nomsd"=>"Business Partener/BMO"],
            ["nomsd"=>"Etudes"],
            ["nomsd"=>"Infrastructure Réseau & Telecom"],
            ["nomsd"=>"Production Support Technique"],
            ["nomsd"=>"Sécurité & Risque IT"],

        ]);
    }
}
