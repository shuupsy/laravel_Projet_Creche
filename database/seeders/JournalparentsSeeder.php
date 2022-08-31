<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JournalparentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("journalparents")->insert([
            [
                "accident" => "none",
                "profilenfantparent_id" => 1,
                "eat" => "TB",
                "activity" => "coloriage + peinture",
                "day" => "07 septembre 2022",
                "arrivalTime" => "7:45",
                "departTime" => "17:30",
                "sleep" => 3,
                "poo" => 3,
                "change" => 2,
                "temperature" => 38.7,
                "humeur" => "joyeux"
            ],
            [
                "accident" => "tombé sur la main droite",
                "profilenfantparent_id" => 2,
                "eat" => "PB",
                "activity" => "peinture",
                "day" => "07 septembre 2022",
                "arrivalTime" => "9:25",
                "departTime" => "17:45",
                "sleep" => 2.30,
                "poo" => 1,
                "temperature" => 36.7,
                "change" => 1,
                "humeur" => "triste"
            ],
        ]);
    }
}
