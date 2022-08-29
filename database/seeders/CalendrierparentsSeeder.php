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
            [
                "day" => "Lundi",
                "dateDay" => 5
            ],
            [
                "day" => "Mardi",
                "dateDay" => 6
            ],
            [
                "day" => "Mercredi",
                "dateDay" => 7
            ],
            [
                "day" => "Jeudi",
                "dateDay" => 8
            ],
            [
                "day" => "Vendredi",
                "dateDay" => 9
            ],
            [
                "day" => "Samedi",
                "dateDay" => 10
            ],
            [
                "day" => "Dimanche",
                "dateDay" => 11
            ]
        ]);
    }
}
