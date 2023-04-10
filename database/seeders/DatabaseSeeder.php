<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(StatusTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EquipmentsTableSeeder::class);
        $this->call(RequerimentsTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(CurriculumsTableSeeder::class);

    }
}
