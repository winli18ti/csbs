<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Carbon\Carbon;
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
            'billnumber' => '230900001',
            'servicetype' => 'reguler',
            'paytype' => 'penagihan ke pelanggan',
            'subsperiod' => 1,
            'bill' => 250000,
            'status' => 'lunas',
            'duedate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-30 23:59:59'),
            'paiddate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-20 15:07:38'),
            'collectorid' => 1,
            'serviceid' => 41,
            'customerid' => 1,
            'userid' => 1,
            'info' => 'Via Teknisi Rances/Arafik'
          ],
          [
            'billnumber' => '231000001',
            'servicetype' => 'reguler',
            'paytype' => 'penagihan ke pelanggan',
            'subsperiod' => 1,
            'bill' => 66000,
            'status' => 'belum lunas',
            'duedate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-10-31 23:59:59'),
            'serviceid' => 41,
            'customerid' => 1,
          ],
          [
            'billnumber' => '231100001',
            'servicetype' => 'reguler',
            'paytype' => 'penagihan ke pelanggan',
            'subsperiod' => 1,
            'bill' => 75000,
            'status' => 'belum lunas',
            'duedate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-11-30 23:59:59'),
            'serviceid' => 41,
            'customerid' => 1,
          ],
          [
            'billnumber' => '230800001',
            'servicetype' => 'reguler',
            'paytype' => 'pembayaran ke kantor',
            'subsperiod' => 1,
            'bill' => 210000,
            'status' => 'lunas',
            'duedate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-08-31 23:59:59'),
            'paiddate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-02 08:17:31'),
            'collectorid' => 1,
            'serviceid' => 14,
            'customerid' => 2,
            'userid' => 2,
            'info' => 'Via Teknisi Rances/Arafik'
          ],
          [
            'billnumber' => '230900002',
            'servicetype' => 'reguler',
            'paytype' => 'pembayaran ke kantor',
            'subsperiod' => 1,
            'bill' => 210000,
            'status' => 'lunas',
            'duedate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-30 23:59:59'),
            'paiddate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-10-06 15:38:24'),
            'collectorid' => 1,
            'serviceid' => 14,
            'customerid' => 2,
            'userid' => 3,
            'info' => 'Via Teknisi Rances/Arafik'
          ],
          [
            'billnumber' => '231000002',
            'servicetype' => 'reguler',
            'paytype' => 'pembayaran ke kantor',
            'subsperiod' => 1,
            'bill' => 200000,
            'status' => 'belum lunas',
            'duedate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-10-31 23:59:59'),
            'serviceid' => 14,
            'customerid' => 2,
          ],
          [
            'billnumber' => '221000001',
            'servicetype' => 'reguler',
            'paytype' => 'pembayaran ke kantor',
            'subsperiod' => 1,
            'bill' => 205000,
            'status' => 'lunas',
            'duedate' => Carbon::createFromFormat('Y-m-d H:i:s', '2022-10-31 23:59:59'),
            'paiddate' => Carbon::createFromFormat('Y-m-d H:i:s', '2022-10-31 12:50:05'),
            'collectorid' => 12,
            'serviceid' => 42,
            'customerid' => 3,
            'userid' => 1,
            'info' => 'Via Teknisi Rances/Arafik'
          ],
          [
            'billnumber' => '221100001',
            'servicetype' => 'reguler',
            'paytype' => 'pembayaran ke kantor',
            'subsperiod' => 1,
            'bill' => 200000,
            'status' => 'belum lunas',
            'duedate' => Carbon::createFromFormat('Y-m-d H:i:s', '2022-11-30 23:59:59'),
            'serviceid' => 42,
            'customerid' => 3,
          ],
          [
            'billnumber' => '221200001',
            'servicetype' => 'reguler',
            'paytype' => 'penagihan ke rumah',
            'subsperiod' => 1,
            'bill' => 75000,
            'status' => 'belum lunas',
            'duedate' => Carbon::createFromFormat('Y-m-d H:i:s', '2022-12-31 23:59:59'),
            'serviceid' => 41,
            'customerid' => 4,
          ],
          [
            'billnumber' => '230100001',
            'servicetype' => 'reguler',
            'paytype' => 'penagihan ke rumah',
            'subsperiod' => 1,
            'bill' => 75000,
            'status' => 'belum lunas',
            'duedate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-01-31 23:59:59'),
            'serviceid' => 41,
            'customerid' => 4,
          ],
          [
            'billnumber' => '230900003',
            'servicetype' => 'reguler',
            'paytype' => 'penagihan ke rumah',
            'subsperiod' => 1,
            'bill' => 75000,
            'status' => 'lunas',
            'duedate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-30 23:59:59'),
            'paiddate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-10-02 10:50:12'),
            'collectorid' => 18,
            'serviceid' => 41,
            'customerid' => 6,
            'userid' => 2,
          ],
          [
            'billnumber' => '231000003',
            'servicetype' => 'reguler',
            'paytype' => 'penagihan ke rumah',
            'subsperiod' => 1,
            'bill' => 75000,
            'status' => 'belum lunas',
            'duedate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-10-31 23:59:59'),
            'serviceid' => 41,
            'customerid' => 6,
          ],
        );

        foreach($arr as $data) {
          Invoice::create($data);
        }
    }
}
