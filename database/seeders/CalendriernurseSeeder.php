<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CalendriernurseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("calendriernurses")->insert([
            [
                "day" => "Lundi",
                "dateDay" => 5,
                "nomEnfant" => "Sarah",
                "rdvEnfant" => "médecin",
                "rdvHours" => "10h",
                "rdvType" => "trimestriel pour vaccin"
            ],
            [
                "day" => "Mardi",
                "dateDay" => 6,
                "nomEnfant" => "Sarah",
                "rdvEnfant" => "médecin",
                "rdvHours" => "9:30h",
                "rdvType" => "malade vomis"
            ],
            [
                "day" => "Mercredi",
                "dateDay" => 7,
                "nomEnfant" => "martin",
                "rdvEnfant" => "médecin",
                "rdvHours" => "10h",
                "rdvType" => "trimestriel pour vaccin"

            ],
            [
                "day" => "Mercredi",
                "dateDay" => 7,
                "nomEnfant" => "martine",
                "rdvEnfant" => "médecin",
                "rdvHours" => "10h",
                "rdvType" => "fièvre"

            ],
            [
                "day" => "Jeudi",
                "dateDay" => 8,
                "nomEnfant" => "théo",
                "rdvEnfant" => "médecin",
                "rdvHours" => "10h",
                "rdvType" => "température"

            ],
            [
                "day" => "Vendredi",
                "dateDay" => 9,
                "nomEnfant" => "Sarah",
                "rdvEnfant" => "médecin",
                "rdvHours" => "10h",
                "rdvType" => "trimestriel pour vaccin"

            ]
        ]);
    }
}
