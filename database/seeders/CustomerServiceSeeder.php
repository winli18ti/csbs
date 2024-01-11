<?php

namespace Database\Seeders;

use App\Models\CustomerService;
use Carbon\Carbon;
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
        'condition' => 'selesai',
        'date' => Carbon::now(),
        'customerid' => 1,
      ],
      [
        'name' => 'ASMNet 10 MBPS',
        'info' => 'ASM Internet 10 Mbps',
        'status' => 'aktif',
        'condition' => 'selesai',
        'date' => Carbon::now(),
        'customerid' => 2,
      ],
      [
        'name' => '	SMARTTV_NOV12',
        'info' => 'SMART TV Promo November 2012',
        'status' => 'tidak aktif',
        'condition' => 'batal',
        'date' => Carbon::now(),
        'customerid' => 3,
      ],
      [
        'name' => '	SMARTTV_NOV12',
        'info' => 'SMART TV Promo November 2012',
        'status' => 'tidak aktif',
        'condition' => 'batal',
        'date' => Carbon::now(),
        'customerid' => 3,
      ],
      [
        'name' => 'ASIAVISION REGULER',
        'info' => 'Paket Reguler AsiaVision',
        'status' => 'tidak aktif',
        'condition' => 'selesai',
        'date' => Carbon::now(),
        'customerid' => 4,
      ],
      [
        'name' => 'ASMNet 50 MBPS',
        'info' => 'ASM internet 50 Mbps',
        'status' => 'tidak aktif',
        'condition' => 'sedang proses',
        'date' => Carbon::now(),
        'customerid' => 5,
      ],
      [
        'name' => 'ASIAVISION REGULER',
        'info' => 'Paket Reguler AsiaVision',
        'status' => 'aktif',
        'condition' => 'selesai',
        'date' => Carbon::now(),
        'customerid' => 6,
      ],
    );

    foreach($arr as $data) {
      CustomerService::create($data);
    }
  }
}
