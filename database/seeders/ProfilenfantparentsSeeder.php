<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilenfantparentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("profilenfantparents")->insert([
            [
                "personalId" => 1,
                "section" => 2,
                "name" => "Théo",
                "imgFace" => "LIEN A MODIFIER",
                "contrat" => "LIEN A MODIFIER",
                "nutritional" => "mange avec une cullière, mixé, préfère courgette, hallal",
                "picturePermission" => "yes",
                "exitPermission" => "no",
                "allergy" => "oeuf,tomate,raisin",
                "size" => "70cm",
                "weight" => "8kg",
                "surveillanceSelles" => "yes",
                "teething" => "no",
                "birthday" => "20/05/20022",
                "presence" => "3",
                "dayOfPresence" => "lundi/mercredi/vendredi"
            ],
            [
                "personalId" => 2,
                "section" => 1,
                "name" => "Martin",
                "imgFace" => "LIEN A MODIFIER",
                "contrat" => "LIEN A MODIFIER",
                "nutritional" => "mange avec les mains, solide, préfère tomates, vege",
                "picturePermission" => "yes",
                "exitPermission" => "yes",
                "allergy" => "",
                "size" => "80cm",
                "weight" => "10kg",
                "surveillanceSelles" => "no",
                "teething" => "no",
                "birthday" => "20/01/20022",
                "presence" => "5",
                "dayOfPresence" => "lundi/mardi/mercredi/jeudi/vendredi"
            ]
        ]);
    }
}
