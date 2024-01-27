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
        $this->call(NodeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(CustomerServiceSeeder::class);
        $this->call(TvAnalogSeeder::class);
        $this->call(InternetSeeder::class);
        $this->call(ComplainSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(InvoiceDetailSeeder::class);
        $this->call(SpkSeeder::class);
        $this->call(InboxSeeder::class);
        $this->call(OutboxSeeder::class);
    }
}
