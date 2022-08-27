<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MessagerienurseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("messagerienurses")->insert([
        [
            "personalId" => 1,
            "name" => "Virginia",
            "img" => "LIEN A MODIFIER",
            "message" => "Je démarre la balade !"
        ],
        [
            "personalId" => 2,
            "name" => "Muriel",
            "img" => "LIEN A MODIFIER",
            "message" => "Bonjour je suis malade aujourdhui :("
        ]
        ]);
    }
}
