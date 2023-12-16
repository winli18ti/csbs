<?php

namespace Database\Seeders;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
  /*
  id, member, name, company, identity
  address, city, email, vip,
  effectivedate, homephone, officephone, cellphone,
  paytype, billperiod, tvcount, node, notes,
  status, statusdate, marketerid
  */
  
    public function run(): void
    {
        $arr = array(
          [
            'member' => '2309001',
            'name' => 'AKIONG',
            'address' => 'Jl. Tg. Datuk No. 219 (KEDAI KOPI MERANTI)',
            'effectivedate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-20 12:00:00'),
            'cellphone' => '085376307866',
            'paytype' => 'penagihan ke pelanggan',
            'vip' => 0,
            'servicetype' => 'reguler',
            'billperiod' => 15,
            'subsperiod' => 1,
            'tvcount' => 1,
            'nodeid' => 68,
            'status' => 'active',
            'marketerid' => 45
          ],
          [
            'member' => '2301001',
            'name' => 'ANDIKA',
            'address' => 'Jl. Kuantan 1 Gg. Buntu No. 26 (depan SDN 132)',
            'effectivedate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-01-18 12:00:00'),
            'cellphone' => '081268027441',
            'paytype' => 'pembayaran ke kantor',
            'vip' => 0,
            'servicetype' => 'reguler',
            'billperiod' => 15,
            'subsperiod' => 1,
            'tvcount' => 0,
            'nodeid' => 31,
            'marketerid' => 13,
            'status' => 'suspend',
            'notes' => '05/10/2023 suspend
                        30/09/2023 sms hotline iuran 15 Sept 2023 = 200.000
                        - Tgl. 1 Sep 2023 ( Di matikan karna suspendet )
                        29/08/2023 sms hotline iuran 15 Agust 2023 = 200.000
                        03/08/2023 suspend + sms hotline iuran 15 Jul 2023 = 210.000
                        08.07.23 wa pelanggan 
                        08/07/2023 sms hotline iuran 15 Jun 2023 = 210.000
                        23/05/2023 sms hotline iuran 15 Mei 2023 = 200.000
                        11/05/2023 suspend + sms hotline iuran 15 Apr 2023 = 210.000
                        29/04/2023 sms hotline iuran Apr 2023 = 200.000
                        30/03/2023 sms hotline iuran Mar 2023 = 200.000',
          ],
          [
            'member' => '1512001',
            'name' => 'DARWISON II',
            'address' => 'Jl. Sudirman No. 235 Kantor Kementrian Agama (Ruangan Kanwil)',
            'paytype' => 'pembayaran ke kantor',
            'vip' => 0,
            'servicetype' => 'reguler',
            'billperiod' => 1,
            'subsperiod' => 1,
            'tvcount' => 0,
            'marketerid' => 63,
            'status' => 'cancel',
            'statusdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2022-11-03 12:00:00'),
            'notes' => '1 STB di ruang tamu kanwil',
          ],
          [
            'member' => '1707001',
            'name' => 'AHAW',
            'address' => 'Jl. Proyek Baru Komp. 14 No. 14 E',
            'cellphone' => '081270666609',
            'paytype' => 'penagihan ke pelanggan',
            'vip' => 0,
            'servicetype' => 'reguler',
            'billperiod' => 1,
            'subsperiod' => 1,
            'tvcount' => 1,
            'nodeid' => 1,
            'marketerid' => 9,
            'status' => 'dismantle',
            'statusdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-11-30 12:00:00'),
            'notes' => 'info teknisi regar, plg minta di tagih tiap bulan
                        SMS 3.1.18
                        - 10.02.18 print jan - feb
                        - 14.02.18 ms hotline iuran jan - feb 290rb
                        - 10.03.18 print feb - mar
                        -09.06.18 sms hotline  
                        03.08.18 SMS 
                        - 9.8.18 print jun - ags
                        - 12.9.18 edit & print ags - sept
                        - 12.10.18 print okt
                        06/12/18 sudah di print iuran Oktober - Desember 2018 = 3 bulan ',
          ],
          [
            'member' => '2310001',
            'name' => 'Hans Anderson',
            'address' => 'Jl. Pemudi',
            'paytype' => 'penagihan ke pelanggan',
            'vip' => 0,
            'servicetype' => 'reguler',
            'billperiod' => 1,
            'subsperiod' => 1,
            'tvcount' => 0,
            'nodeid' => 1,
            'marketerid' => 1,
            'status' => 'registration',
            'statusdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-10-05 12:00:00'),
          ],
          [
            'member' => '2108001',
            'name' => 'LILI',
            'address' => 'Jl. Setia Budi Gg. Indrapuri No. 1 A',
            'cellphone' => '081365356577',
            'paytype' => 'penagihan ke pelanggan',
            'vip' => 0,
            'servicetype' => 'reguler',
            'billperiod' => 1,
            'subsperiod' => 1,
            'tvcount' => 1,
            'nodeid' => 68,
            'marketerid' => 63,
            'status' => 'req dismantle',
            'statusdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-10-05 12:00:00'),
          ]
        );

        foreach($arr as $data) {
          Customer::create($data);
        }
    }
}
