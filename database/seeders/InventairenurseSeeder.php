<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InventairenurseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("inventairenurses")->insert([
            [
                "name" => "Produits d'entretien",
                "number" => 3,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Couche",
                "number" => 34,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Savon",
                "number" => 9,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Désinfectant",
                "number" => 1,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Savon partie intime",
                "number" => 2,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Serum physiologique",
                "number" => 6,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Coton tige",
                "number" => 10,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Crème pour les fesses",
                "number" => 0,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Elastiques pour cheveux",
                "number" => 23,
                "img" => "LIEN A MODIFIER"
            ]
        ]);
    }
}
