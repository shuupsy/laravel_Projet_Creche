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
                "personalId" => 1,
                "section" => 2,
                "name" => "Emilie",
                "img" => "LIEN A MODIFIER",
                "message" => "Bonjour j'aurais un petit retard !"
            ],
            [
                "personalId" => 2,
                "section" => 1,
                "name" => "Sophie",
                "img" => "LIEN A MODIFIER",
                "message" => "Bonjour je n'ai pas encore mangé aujourdhui ;("
            ]
            ]);
    }
}
