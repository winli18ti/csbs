<?php

namespace Database\Seeders;

use App\Models\CustomerService;
use Illuminate\Database\Seeder;

class CustomerServiceSeeder extends Seeder
{
  public function run(): void
  {
    $arr = array(
      [
        'name' => 'ASIAVISION REGULER',
        'info' => 'Paket Reguler AsiaVision',
        'status' => 'aktif',
        'since' => '20/09/2023',
        'customerid' => 1,
      ],
      [
        'name' => 'ASMNet 10 MBPS',
        'info' => 'ASM Internet 10 Mbps',
        'status' => 'aktif',
        'since' => '18/01/2023',
        'customerid' => 2,
      ],
      [
        'name' => '	SMARTTV_NOV12',
        'info' => 'SMART TV Promo November 2012',
        'status' => 'tidak aktif',
        'since' => 'batal',
        'customerid' => 3,
      ],
      [
        'name' => '	SMARTTV_NOV12',
        'info' => 'SMART TV Promo November 2012',
        'status' => 'tidak aktif',
        'since' => 'batal',
        'customerid' => 3,
      ],
      [
        'name' => 'ASIAVISION REGULER',
        'info' => 'Paket Reguler AsiaVision',
        'status' => 'tidak aktif',
        'since' => '25/07/2017',
        'customerid' => 4,
      ],
      [
        'name' => 'ASMNet 50 MBPS',
        'info' => 'ASM internet 50 Mbps',
        'status' => 'tidak aktif',
        'since' => 'sedang proses',
        'customerid' => 5,
      ],
      [
        'name' => 'ASIAVISION REGULER',
        'info' => 'Paket Reguler AsiaVision',
        'status' => 'aktif',
        'since' => '30/08/2021',
        'customerid' => 6,
      ],
    );

    foreach($arr as $data) {
      CustomerService::create($data);
    }
  }
}
