<?php

namespace Database\Seeders;

use App\Models\TvAnalog;
use Illuminate\Database\Seeder;

class TvAnalogSeeder extends Seeder
{
  public function run(): void
  {
    $arr = array(
      [
        'count' => 1,
        'customerid' => 1,
      ],
      [
        'count' => 1,
        'customerid' => 4,
      ],
      [
        'count' => 1,
        'customerid' => 6,
      ],
    );

    foreach($arr as $data) {
      TvAnalog::create($data);
    }
  }
}
