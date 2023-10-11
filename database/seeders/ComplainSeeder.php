<?php

namespace Database\Seeders;

use App\Models\Complain;
use Illuminate\Database\Seeder;

class ComplainSeeder extends Seeder
{
  /*
  id, code, status, priority, servicetype, via,
  source, submittedby, subject, complain, solution,
  acceptedby, acceptedbydate, updateby, updatebydate
  */
  
    public function run(): void
    {
        $arr = array(
          // [
          //   'code' => '202309001',
          //   'status' => 'selesai',
          //   'servicetype' => 'analog',
          //   'via' => 'telepon/fax',
          //   'priority' => 'biasa',
          //   'submittedby' => 'plg',
          //   'source' => 'pelanggan',
          //   'subject' => '(asia) siaran bersemut',
          //   'description' => 'Jl. Tg. Datuk No. 219 ( kedai kopi meranti ) 085376307866',
          //   'solution' => 'perbaikan sambungna kabel
          //                   ts arafik/rances
          //                   cs inneke',
          // ],
        );

        foreach($arr as $data) {
          foreach($data as $key => $value) {
            Complain::create([
              $key => $value
            ]);
          }
        }
    }
}
