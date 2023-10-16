<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProtocoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("protocoles")->insert([
            ["nomp"=>"HTTP"],
            ["nomp"=>"HTTPS"],
            ["nomp"=>"ICMP"],
            ["nomp"=>"SMTP"],

        ]);
    }
}
