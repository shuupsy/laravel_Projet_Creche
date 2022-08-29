<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\InventaireparentsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            InventaireparentsSeeder::class,
            InventairenurseSeeder::class,
            ProfilenfantparentsSeeder::class,
            MessagerieparentsSeeder::class,
            MessagerienurseSeeder::class,
            CalendriernurseSeeder::class,
            CalendrierparentsSeeder::class,
            JournalparentsSeeder::class,
            AdministrationparentsSeeder::class
        ]);
    }
}
