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
                "quantity" => 5,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "personalId" => 1,
                "name" => "Couche",
                "quantity" => 12,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "personalId" => 1,
                "name" => "Lait",
                "quantity" => 3,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "personalId" => 1,
                "name" => "Tute",
                "quantity" => 1,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "personalId" => 1,
                "name" => "Doudou",
                "quantity" => 1,
                "img" => "LIEN A MODIFIER"
            ],
            //enfant avec id unique 2
            [
                "personalId" => 2,
                "name" => "Habits de rechange",
                "quantity" => 7,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "personalId" => 2,
                "name" => "Couche",
                "quantity" => 9,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "personalId" => 2,
                "name" => "Lait",
                "quantity" => 1,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "personalId" => 2,
                "name" => "Tute",
                "quantity" => 2,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "personalId" => 2,
                "name" => "Doudou",
                "quantity" => 1,
                "img" => "LIEN A MODIFIER"
            ]
        ]);
    }
}
