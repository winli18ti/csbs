<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            'ASM internet 50 Mbps',
            'ASM Internet 30 Mbps + TV Analog',
            'ASM Internet 30 Mbps + TV Digital',
            'ASM Internet 30 Mbps',
            'ASM Internet 20 Mbps + TV Analog',
            'ASM Internet 10 Mbps + TV Analog',
            'ASM Internet 5 Mbps + TV Analog',
            'ASM Internet 20 Mbps + TV Digital',
            'Smart Vision',
            'ASM Internet 5 Mbps + TV Digital',
            'ASM Internet 5 Mbps',
            'ASM Internet 20 Mbps',
            'ASM Internet 10 Mbps + TV Digital',
            'ASM Internet 10 Mbps',
            'Internet 2 Mbps + Analog TV',
            'Internet 2 Mbps + Smart TV',
            'Internet 3 Mbps',
            'Internet 5 Mbps + Smart TV',
            'Internet 6 Mbps + Smart TV',
            'Internet 4 Mbps + TV Digital',
            'Internet 6 Mbps',
            'Internet 5 Mbps + Smart Platinum',
            'Internet 5 Mbps + Smart Movie',
            'Internet 5 Mbps + Smart Mandarin',
            'Internet 4 Mbps',
            'Internet 3 Mbps + Smart Platinum',
            'Internet 3 Mbps + Smart Movie',
            'Internet 3 Mbps + Smart Mandarin',
            'Smart Platinum',
            'Smart Movie',
            'Internet 2 Mbps',
            'SmartWIFI 5 Mbps',
            'SmartWIFI 3 Mbps',
            'SmartWIFI 2 Mbps',
            'SmartWIFI 1 Mbps',
            'TV & Internet 1 Mbps',
            'Smart Mandarin',
            'Internet 1 Mbps',
            'SMARTTV',
            'Paket 5 Jari (1TVD 2TVA 3Mbps)',
            'Paket Reguler AsiaVision',
            'HEMAT 384 Kbps Promo Mei 2012 (TV + INTERNET)',
        );

        foreach($data as $name) {
            Service::create([
                'name' => $name,
                'info' => '',
                'price' => 0,
            ]);
        }
    }
}
