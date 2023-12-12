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
        $arr = array(
            [
                'name' => 'ASMNet 50 MBPS',
                'info' => 'ASM Internet 50 Mbps',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'ASMNet 30MBPS + TV ANALOG',
                'info' => 'ASM Internet 30 Mbps + TV Analog',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'ASMNet 30MBPS + TV DIGITAL',
                'info' => 'ASM Internet 30 Mbps + TV Digital',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'ASMNet 30 MBPS',
                'info' => 'ASM Internet 30 Mbps',
                'type' => 'internet',
                'price' => 0,
            ],
            [
                'name' => 'ASMNet 20MBPS + TV ANALOG',
                'info' => 'ASM Internet 20 Mbps + TV Analog',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'ASMNet 20MBPS + TV DIGITAL',
                'info' => 'ASM Internet 20 Mbps + TV Digital',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'ASMNet 20 MBPS',
                'info' => 'ASM Internet 20 Mbps',
                'type' => 'internet',
                'price' => 0,
            ],
            [
                'name' => 'ASMNet 10MBPS + TV ANALOG',
                'info' => 'ASM Internet 10 Mbps + TV Analog',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'ASMNet 10MBPS + TV DIGITAL',
                'info' => 'ASM Internet 10 Mbps + TV Digital',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'ASMNet 10 MBPS',
                'info' => 'ASM Internet 10 Mbps',
                'type' => 'internet',
                'price' => 0,
            ],
            [
                'name' => 'ASMNet 5MBPS + TV ANALOG',
                'info' => 'ASM Internet 5 Mbps + TV Analog',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'ASMNet 5MBPS + TV DIGITAL',
                'info' => 'ASM Internet 5 Mbps + TV Digital',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'ASMNet 5 MBPS',
                'info' => 'ASM Internet 5 Mbps',
                'type' => 'internet',
                'price' => 0,
            ],
            [
                'name' => 'SMARTVISION',
                'info' => 'Smart Vision',
                'type' => 'tv',
                'price' => 0,
            ],
            [
                'name' => 'Internet 6 MBPS + SMART TV',
                'info' => 'Internet 6 Mbps + Smart TV',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'Internet 6 MBPS',
                'info' => 'Internet 6 Mbps',
                'type' => 'internet',
                'price' => 0,
            ],
            [
                'name' => 'Internet 5 MBPS + SMART TV',
                'info' => 'Internet 5 Mbps + Smart TV',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'Internet 5 MBPS + SMART-PLATINUM',
                'info' => 'Internet 5 Mbps + Smart Platinum',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'Internet 5 MBPS + SMART-MOVIE',
                'info' => 'Internet 5 Mbps + Smart Movie',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'Internet 5 MBPS + SMART-MANDARIN',
                'info' => 'Internet 5 Mbps + Smart Mandarin',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'Internet 4 MBPS + TV DIGITAL',
                'info' => 'Internet 4 Mbps + TV Digital',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'Internet 4 MBPS',
                'info' => 'Internet 4 Mbps',
                'type' => 'internet',
                'price' => 0,
            ],
            [
                'name' => 'Internet 3 MBPS + SMART-PLATINUM',
                'info' => 'Internet 3 Mbps + Smart Platinum',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'Internet 3 MBPS + SMART-MOVIE',
                'info' => 'Internet 3 Mbps + Smart Movie',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'Internet 3 MBPS + SMART-MANDARIN',
                'info' => 'Internet 3 Mbps + Smart Mandarin',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'Internet 3 MBPS',
                'info' => 'Internet 3 Mbps',
                'type' => 'internet',
                'price' => 0,
            ],
            [
                'name' => 'Internet 2 MBPS + ANALOG TV',
                'info' => 'Internet 2 Mbps + Analog TV',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'Internet 2 MBPS + SMART TV',
                'info' => 'Internet 2 Mbps + Smart TV',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'Internet 2 MBPS',
                'info' => 'Internet 2 Mbps',
                'type' => 'internet',
                'price' => 0,
            ],
            [
                'name' => 'SMART-PLATINUM',
                'info' => 'Smart Platinum',
                'type' => 'tv',
                'price' => 0,
            ],
            [
                'name' => 'SMART-MOVIE',
                'info' => 'Smart Movie',
                'type' => 'tv',
                'price' => 0,
            ],
            [
                'name' => 'SmartWIFI 5 MBPS',
                'info' => 'SmartWIFI 5 Mbps',
                'type' => 'internet',
                'price' => 0,
            ],
            [
                'name' => 'SmartWIFI 3 MBPS',
                'info' => 'SmartWIFI 3 Mbps',
                'type' => 'internet',
                'price' => 0,
            ],
            [
                'name' => 'SmartWIFI 2 MBPS',
                'info' => 'SmartWIFI 2 Mbps',
                'type' => 'internet',
                'price' => 0,
            ],
            [
                'name' => 'SmartWIFI 1 MBPS',
                'info' => 'SmartWIFI 1 Mbps',
                'type' => 'internet',
                'price' => 0,
            ],
            [
                'name' => 'TV & Internet 1 MBPS',
                'info' => 'TV & Internet 1 Mbps',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'Internet 1 MBPS',
                'info' => 'Internet 1 Mbps',
                'type' => 'internet',
                'price' => 0,
            ],
            [
                'name' => 'SMART-MANDARIN',
                'info' => 'Smart Mandarin',
                'type' => 'tv',
                'price' => 0,
            ],
            [
                'name' => 'SMARTTV',
                'info' => 'SMARTTV',
                'type' => 'tv',
                'price' => 0,
            ],
            [
                'name' => 'Paket 5 Jari (1TVD 2TVA 3Mbps)',
                'info' => '1 TV Digital + 2 TV Analog + Internet 3 Mbps',
                'type' => 'tv & internet',
                'price' => 0,
            ],
            [
                'name' => 'ASIAVISION REGULER',
                'info' => 'Paket Reguler AsiaVision',
                'type' => 'analog',
                'price' => 0,
            ],
            [
                'name' => 'HEMAT 384 Kbps Promo Mei 2012 (TV + INTERNET)',
                'info' => 'HEMAT 384 Kbps Promo Mei 2012 (TV + INTERNET)',
                'type' => 'tv & internet',
                'price' => 0,
            ],
        ); //REGULER NON BIASA - Paket Layanan Non Biasa - non biasa

        foreach($arr as $data) {
            Service::create($data);
        }
    }
}
