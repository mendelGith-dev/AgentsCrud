<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("zones")->insert([
            ["libelle" => "Ville"],
            ["libelle" => "Limete"],
            ["libelle" => "Tshangu"],
            ["libelle" => "Bon marcher"],
            ["libelle" => "Kingabwa"],
            ["libelle" => "Kitambo"],
            ["libelle" => "Delveau"]
        ]);
    }
}
