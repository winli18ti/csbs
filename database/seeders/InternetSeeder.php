<?php

namespace Database\Seeders;

use App\Models\Internet;
use Illuminate\Database\Seeder;

class InternetSeeder extends Seeder
{
  public function run(): void
  {
    $arr = array(
      [
        'modemnumber' => 'ZDBGCC6065BC',
        'modemip' => '172.17.13.87',
        'modemmac' => '6C:D2:BA:2E:66:25',
        'cpeip' => 'PORT 1/3/7:15 OLT KAMPAR',
        'cpemac' => 'Radius : andikakuantan',
        'customerid' => 2,
      ],
    );

    foreach($arr as $data) {
      Internet::create($data);
    }
  }
}
