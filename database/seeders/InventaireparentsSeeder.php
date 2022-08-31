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
                "name" => "Habits de rechange",
                "profilenfantparent_id" => 1,
                "quantity" => 5,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Couche",
                "profilenfantparent_id" => 1,
                "quantity" => 12,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Lait",
                "profilenfantparent_id" => 1,
                "quantity" => 3,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Tute",
                "profilenfantparent_id" => 1,
                "quantity" => 1,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Doudou",
                "profilenfantparent_id" => 1,
                "quantity" => 1,
                "img" => "LIEN A MODIFIER"
            ],
            //enfant avec id unique 2
            [
                "name" => "Habits de rechange",
                "profilenfantparent_id" => 2,
                "quantity" => 7,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Couche",
                "profilenfantparent_id" => 2,
                "quantity" => 9,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Lait",
                "profilenfantparent_id" => 2,
                "quantity" => 1,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Tute",
                "profilenfantparent_id" => 2,
                "quantity" => 2,
                "img" => "LIEN A MODIFIER"
            ],
            [
                "name" => "Doudou",
                "profilenfantparent_id" => 2,
                "quantity" => 1,
                "img" => "LIEN A MODIFIER"
            ]
        ]);
    }
}
