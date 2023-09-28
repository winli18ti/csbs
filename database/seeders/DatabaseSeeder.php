<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CollectorSeeder::class);
        $this->call(MarketerSeeder::class);
        $this->call(OfficerSeeder::class);
        $this->call(ServiceSeeder::class);
    }
}
