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
                "quantity" => 3,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Couche",
                "quantity" => 34,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Savon",
                "quantity" => 9,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Désinfectant",
                "quantity" => 1,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Savon partie intime",
                "quantity" => 2,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Serum physiologique",
                "quantity" => 6,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Coton tige",
                "quantity" => 10,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Crème pour les fesses",
                "quantity" => 0,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Elastiques pour cheveux",
                "quantity" => 23,
                "img" => "LIEN A MODIFIER"
            ]
        ]);
    }
}
