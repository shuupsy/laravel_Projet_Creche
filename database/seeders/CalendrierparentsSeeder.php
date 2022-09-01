<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CalendrierparentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("calendrierparents")->insert([
            // id 1
            [
                "day" => "Lundi",
                "profilenfantparent_id" => 1,
                "activity" => "peinture",
                "dateDay" => 5
            ],
            [
                "day" => "Mardi",
                "profilenfantparent_id" => 1,
                "activity" => "dessin",
                "dateDay" => 6
            ],
            [
                "day" => "Mercredi",
                "profilenfantparent_id" => 1,
                "activity" => "aucune",
                "dateDay" => 7
            ],
            [
                "day" => "Jeudi",
                "profilenfantparent_id" => 1,
                "activity" => "lecture",
                "dateDay" => 8
            ],
            [
                "day" => "Vendredi",
                "profilenfantparent_id" => 1,
                "activity" => "musique",
                "dateDay" => 9
            ],
            [
                "day" => "Samedi",
                "profilenfantparent_id" => 1,
                "activity" => "aucune",
                "dateDay" => 10
            ],
            [
                "day" => "Dimanche",
                "profilenfantparent_id" => 1,
                "activity" => "aucune",
                "dateDay" => 11
            ],
        ]);
    }
}
