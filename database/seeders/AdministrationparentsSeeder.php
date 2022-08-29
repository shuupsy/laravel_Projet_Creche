<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdministrationparentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("administrationparents")->insert([
            [
                "title" => "Cértificat médical",
                "personalId" => 1,
                "commentary" => "du 01/09/2022 au 03/09/2022",
                "files" => "LIEN A MODIFIER"
            ],
            [
                "title" => "Vaccin",
                "personalId" => 1,
                "commentary" => "vaccin contre ?? effectué le 23/08/2022",
                "files" => "LIEN A MODIFIER"
            ],
            [
                "title" => "Autorisation",
                "personalId" => 2,
                "commentary" => "le frère peut venir chercher l'enfant, une copie de la carte d'id en copie",
                "files" => "LIEN A MODIFIER"
            ]
        ]);
    }
}
