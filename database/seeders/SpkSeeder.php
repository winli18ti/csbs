<?php

namespace Database\Seeders;

use App\Models\Spk;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\map;

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
            'category' => 'Registrasi',
            'spknumber' => '202309001',
            'service' => 'ASIAVISION REGULER - Paket Reguler AsiaVision',
            'servicetype' => 'analog',
            'status' => 'selesai',
            'tvanalog' => 1,
            'inputdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-20 17:24:27'),
            'startdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-20 17:24:27'),
            'enddate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-20 17:24:27'),
            'node' => 'HE',
            'officerid1' => 18,
            'officerid2' => 5,
            'customerid' => 1,
          ],
          [
            'category' => 'Registrasi',
            'spknumber' => '202301001',
            'service' => 'ASMNet 10 MBPS - ASM Internet 10 Mbps',
            'servicetype' => 'internet',
            'status' => 'selesai',
            'modemnumber' => 'ZDBGCC6065BC',
            'modemip' => '172.17.13.87',
            'modemmac' => '6C:D2:BA:2E:66:25',
            'cpeip' => 'PORT 1/3/7:15 OLT KAMPAR',
            'cpemac' => 'Radius : andikakuantan',
            'inputdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-01-23 10:48:39'),
            'startdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-01-23 10:48:39'),
            'enddate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-01-23 10:48:39'),
            'node' => 'FN 30',
            'officerid1' => 11,
            'officerid2' => 12,
            'customerid' => 2,
          ],
          [
            'category' => 'Registrasi',
            'spknumber' => '201512001',
            'service' => 'SMARTTV_NOV12 - SMART TV Promo November 2012',
            'servicetype' => 'tv',
            'status' => 'selesai',
            'tvanalog' => 0,
            'serialnumber' => '312000047113060400816',
            'smartcard' => '173510070019216',
            'inputdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2015-12-03 09:51:39'),
            'startdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2015-12-03 09:51:39'),
            'enddate' => Carbon::createFromFormat('Y-m-d H:i:s', '2015-12-03 09:51:39'),
            'node' => 'FN 17',
            'officerid1' => 1,
            'officerid2' => 1,
            'customerid' => 3,
          ],
          [
            'category' => 'Registrasi',
            'spknumber' => '202211001',
            'service' => 'SMARTTV_NOV12 - SMART TV Promo November 2012',
            'servicetype' => 'tv',
            'status' => 'batal',
            'tvanalog' => 0,
            'inputdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2022-11-03 08:46:21'),
            'node' => 'FN 17',
            'customerid' => 3,
          ],
          [
            'category' => 'Registrasi',
            'spknumber' => '201707001',
            'service' => 'ASIAVISION REGULER - Paket Reguler AsiaVision',
            'servicetype' => 'analog',
            'status' => 'selesai',
            'tvanalog' => 1,
            'inputdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-07-27 16:12:58'),
            'startdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-07-25 00:00:00'),
            'enddate' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-07-25 00:00:00'),
            'node' => 'ON 2',
            'officerid1' => 1,
            'officerid2' => 1,
            'customerid' => 4,
          ],
          [
            'category' => 'Registrasi',
            'spknumber' => '202310001',
            'service' => 'ASMNet 50 MBPS - ASM internet 50 Mbps',
            'servicetype' => 'tv & internet',
            'status' => 'blm proses',
            'tvanalog' => 0,
            'inputdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-10-05 09:26:49'),
            'customerid' => 5,
          ],
          [
            'category' => 'Registrasi',
            'spknumber' => '202108001',
            'service' => 'ASIAVISION REGULER - Paket Reguler AsiaVision',
            'servicetype' => 'analog',
            'status' => 'selesai',
            'tvanalog' => 1,
            'inputdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2021-08-30 18:01:46'),
            'startdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2021-08-30 18:01:46'),
            'enddate' => Carbon::createFromFormat('Y-m-d H:i:s', '2021-08-30 18:01:46'),
            'officerid1' => 3,
            'officerid2' => 4,
            'customerid' => 6,
          ],
          [
            'category' => 'Tambah TV',
            'spknumber' => '201905001',
            'service' => 'SMARTTV_NOV12 - SMART TV Promo November 2012',
            'servicetype' => 'tv',
            'status' => 'selesai',
            'serialnumber' => '312000047114031400093',
            'smartcard' => '173510070010723',
            'inputdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2019-05-21 00:00:00'),
            'startdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2019-05-21 00:00:00'),
            'enddate' => Carbon::createFromFormat('Y-m-d H:i:s', '2019-05-21 00:00:00'),
            'officerid1' => 11,
            'officerid2' => 9,
            'customerid' => 3,
          ],
          [
            'category' => 'Dismantle',
            'spknumber' => '201606001',
            'service' => 'SMARTTV_NOV12 - SMART TV Promo November 2012',
            'servicetype' => 'tv',
            'status' => 'batal',
            'tvanalog' => 0,
            'inputdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2016-06-18 16:14:25'),
            'startdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2016-06-18 16:14:25'),
            'officerid1' => 1,
            'officerid2' => 1,
            'node' => 'FN 17',
            'reason' => 'tdk sanggup byr (tunggakan per 01 Mei s/d 30 Jun 2016 = 2 bln) belum ada byr2, alasan anggaran belum cair



            082386655301',
            'solution' => '0',
            'customerid' => 3,
          ],
          [
            'category' => 'Dismantle',
            'spknumber' => '201701001',
            'service' => 'SMARTTV_NOV12 - SMART TV Promo November 2012',
            'servicetype' => 'tv',
            'status' => 'batal',
            'tvanalog' => 0,
            'inputdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-01-10 14:53:17'),
            'startdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-01-11 00:00:00'),
            'officerid1' => 1,
            'officerid2' => 9,
            'node' => 'FN 17',
            'reason' => 'tunggakan iuran per 01 Nov 2016 s/d skrg blm ada byr ..

            082386655301',
            'solution' => '0',
            'customerid' => 3,
          ],
          [
            'category' => 'Dismantle',
            'spknumber' => '202211002',
            'service' => 'SMARTTV_NOV12 - SMART TV Promo November 2012',
            'servicetype' => 'tv',
            'status' => 'batal',
            'tvanalog' => 0,
            'inputdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2022-11-01 10:13:41'),
            'startdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2022-11-01 10:13:41'),
            'enddate' => Carbon::createFromFormat('Y-m-d H:i:s', '2022-11-01 10:13:41'),
            'officerid1' => 11,
            'officerid2' => 20,
            'node' => 'FN 17',
            'reason' => 'info bg david tidak mau pakai lagi',
            'solution' => 'alat sudah diambil',
            'customerid' => 3,
          ],
          [
            'category' => 'Dismantle',
            'spknumber' => '202301002',
            'service' => 'ASIAVISION REGULER - Paket Reguler AsiaVision',
            'servicetype' => 'analog',
            'status' => 'selesai',
            'tvanalog' => 1,
            'inputdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-01-10 14:09:23'),
            'startdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-01-30 00:00:00'),
            'enddate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-01-30 00:00:00'),
            'node' => 'ON 2',
            'officerid1' => 10,
            'officerid2' => 5,
            'reason' => 'PELANGGAN PINDAH RUMAH',
            'solution' => 'kabel 15 meter',
            'customerid' => 4,
          ]
        );

        foreach($arr as $data) {
          Spk::create($data);
        }
    }
}
