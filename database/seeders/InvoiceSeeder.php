<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
  /*
  id, billnumber, servicetype, period, paytype,
  subsperiod, bill, status, paiddate, info,
  serviceid, collectorid, customerid, userid
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
          foreach($data as $key => $value) {
            Invoice::create([
              $key => $value
            ]);
          }
        }
    }
}
