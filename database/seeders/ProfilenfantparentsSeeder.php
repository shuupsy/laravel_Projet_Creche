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
                "section" => "moyen",
                "name" => "Théo",
                "genre" => "masculin",
                "imgFace" => "baby.svg",
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
                "section" => "petit",
                "name" => "Martine",
                "genre" => "feminin",
                "imgFace" => "baby-girl.svg",
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
            ],
            [
                "section" => "moyen",
                "name" => "Sarah",
                "genre" => "feminin",
                "imgFace" => "baby-girl.svg",
                "contrat" => "LIEN A MODIFIER",
                "nutritional" => "mange avec les mains, solide, préfère tomates, vege",
                "picturePermission" => "yes",
                "exitPermission" => "yes",
                "allergy" => "",
                "size" => "30cm",
                "weight" => "120kg",
                "surveillanceSelles" => "no",
                "teething" => "no",
                "birthday" => "20/01/20022",
                "presence" => "5",
                "dayOfPresence" => "lundi/mardi/mercredi/jeudi/vendredi"
            ],
            [
                "section" => "grand",
                "name" => "Martin",
                "genre" => "masculin",
                "imgFace" => "baby.svg",
                "contrat" => "LIEN A MODIFIER",
                "nutritional" => "mange avec les mains, solide, préfère tomates, vege",
                "picturePermission" => "yes",
                "exitPermission" => "yes",
                "allergy" => "",
                "size" => "84cm",
                "weight" => "12kg",
                "surveillanceSelles" => "no",
                "teething" => "no",
                "birthday" => "20/01/20022",
                "presence" => "1",
                "dayOfPresence" => "lundi"
            ],
            [
                "section" => "moyen",
                "name" => "Théo",
                "genre" => "masculin",
                "imgFace" => "baby.svg",
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
                "section" => "petit",
                "name" => "Martine",
                "genre" => "feminin",
                "imgFace" => "baby-girl.svg",
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
            ],
            [
                "section" => "moyen",
                "name" => "Sarah",
                "genre" => "feminin",
                "imgFace" => "baby-girl.svg",
                "contrat" => "LIEN A MODIFIER",
                "nutritional" => "mange avec les mains, solide, préfère tomates, vege",
                "picturePermission" => "yes",
                "exitPermission" => "yes",
                "allergy" => "",
                "size" => "30cm",
                "weight" => "120kg",
                "surveillanceSelles" => "no",
                "teething" => "no",
                "birthday" => "20/01/20022",
                "presence" => "5",
                "dayOfPresence" => "lundi/mardi/mercredi/jeudi/vendredi"
            ],
            [
                "section" => "grand",
                "name" => "Martin",
                "genre" => "masculin",
                "imgFace" => "baby.svg",
                "contrat" => "LIEN A MODIFIER",
                "nutritional" => "mange avec les mains, solide, préfère tomates, vege",
                "picturePermission" => "yes",
                "exitPermission" => "yes",
                "allergy" => "",
                "size" => "84cm",
                "weight" => "12kg",
                "surveillanceSelles" => "no",
                "teething" => "no",
                "birthday" => "20/01/20022",
                "presence" => "1",
                "dayOfPresence" => "lundi"
            ]
        ]);
    }
}
