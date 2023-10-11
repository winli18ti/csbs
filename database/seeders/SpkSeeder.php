<?php

namespace Database\Seeders;

use App\Models\Spk;
use Illuminate\Database\Seeder;

class SpkSeeder extends Seeder
{
  /*
  id, category, spknumber, service, servicetype, status,
  statusdate, customerid
  */
  
    public function run(): void
    {
        $arr = array(
          [
            '' => '',
          ],
          [
            
          ]
        );

        foreach($arr as $data) {
          Spk::create($data);
        }
    }
}
