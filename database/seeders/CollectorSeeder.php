<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Collector;

class CollectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            'BACK OFFICE ASIA',
            'BACK OFFICE TAMBUSAI',
            'Bank BCA',
            'BANK MANDIRI',
            'Bank Mandiri-9847',
            'BCA GIRO PKU',
            'BCA-DEBET',
            'Credit Card',
            'Harianto',
            'Hendri',
            'HENDRI 1',
            'IKR SMART &amp; MARKETING',
            'Pakde',
            'PAKDE 1',
            'SUSANTO',
            'SUSANTO 1',
            'Team-Jaringan',
            'ZAMRI',
        );

        foreach($data as $name) {
            Collector::create([
                'name' => $name,
                'status' => 'aktif'
            ]);
        }
    }
}
