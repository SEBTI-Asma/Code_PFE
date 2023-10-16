<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("departements")->insert([
            ["nomd"=>"Achat"],
            ["nomd"=>"DSI"],
            ["nomd"=>"Opération"],
            ["nomd"=>"RH"],
            ["nomd"=>"SIMEX"],

        ]);
    }
}
