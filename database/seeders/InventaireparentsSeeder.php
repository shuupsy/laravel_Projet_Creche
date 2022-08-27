<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InventaireparentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("inventaireparents")->insert([
            //enfant avec id unique 1
            [
                "personalId" => 1,
                "name" => "Habits de rechange",
                "number" => 5,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "personalId" => 1,
                "name" => "Couche",
                "number" => 12,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "personalId" => 1,
                "name" => "Lait",
                "number" => 3,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "personalId" => 1,
                "name" => "Tute",
                "number" => 1,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "personalId" => 1,
                "name" => "Doudou",
                "number" => 1,
                "img" => "LIEN A MODIFIER"
            ],
            //enfant avec id unique 2
            [
                "personalId" => 2,
                "name" => "Habits de rechange",
                "number" => 7,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "personalId" => 2,
                "name" => "Couche",
                "number" => 9,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "personalId" => 2,
                "name" => "Lait",
                "number" => 1,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "personalId" => 2,
                "name" => "Tute",
                "number" => 2,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "personalId" => 2,
                "name" => "Doudou",
                "number" => 1,
                "img" => "LIEN A MODIFIER"
            ]
        ]);
    }
}
