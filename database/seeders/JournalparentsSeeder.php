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
                "personalId" => "1",
                "accident" => "none",
                "eat" => "pomme de terre harricot",
                "activity" => "coloriage + peinture",
                "day" => "07 septembre 2022",
                "arrivalTime" => "7:45",
                "poo" => "11h30"
            ],
            [
                "personalId" => "2",
                "accident" => "tombé sur la main droite",
                "eat" => "pomme de terre harricot",
                "activity" => "peinture",
                "day" => "07 septembre 2022",
                "arrivalTime" => "9:25",
                "poo" => "15h30"
            ],
        ]);
    }
}
