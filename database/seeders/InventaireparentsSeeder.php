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
                "img" => "pijama-baby-clothes-svgrepo-com.svg"
            ],
            [
                "name" => "Couche",
                "profilenfantparent_id" => 1,
                "quantity" => 12,
                "img" => "diaper.svg"
            ],
            [
                "name" => "Lait",
                "profilenfantparent_id" => 1,
                "quantity" => 3,
                "img" => "feeding-bottle.svg"
            ],
            [
                "name" => "Tute",
                "profilenfantparent_id" => 1,
                "quantity" => 1,
                "img" => "pacifier-svgrepo-com.svg"
            ],
            [
                "name" => "Doudou",
                "profilenfantparent_id" => 1,
                "quantity" => 1,
                "img" => "teddy-bear.svg"
            ],
            //enfant avec id unique 2
            [
                "name" => "Habits de rechange",
                "profilenfantparent_id" => 2,
                "quantity" => 7,
                "img" => "pijama-baby-clothes-svgrepo-com.svg"
            ],
            [
                "name" => "Couche",
                "profilenfantparent_id" => 2,
                "quantity" => 9,
                "img" => "diaper.svg"
            ],
            [
                "name" => "Lait",
                "profilenfantparent_id" => 2,
                "quantity" => 1,
                "img" => "feeding-bottle.svg"
            ],
            [
                "name" => "Tute",
                "profilenfantparent_id" => 2,
                "quantity" => 2,
                "img" => "pacifier-svgrepo-com.svg"
            ],
            [
                "name" => "Doudou",
                "profilenfantparent_id" => 2,
                "quantity" => 1,
                "img" => "teddy-bear.svg"
            ]
        ]);
    }
}
