<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MessagerieparentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("messagerieparents")->insert([
            [
                "section" => 2,
                "name" => "Emilie",
                "profilenfantparent_id" => 1,
                "img" => "LIEN A MODIFIER",
                "message" => "Bonjour j'aurais un petit retard !"
            ],
            [
                "section" => 1,
                "name" => "Sophie",
                "profilenfantparent_id" => 2,
                "img" => "LIEN A MODIFIER",
                "message" => "Bonjour je n'ai pas encore mangé aujourdhui ;("
            ]
            ]);
    }
}
