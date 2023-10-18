<?php

namespace Database\Seeders;

use App\Models\Complain;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ComplainSeeder extends Seeder
{
  /*
  id, code, status, priority, servicetype, via,
  source, submittedby, subject, description, solution,
  acceptedby, acceptedbydate, updateby, updatebydate
  */
  
    public function run(): void
    {
        $arr = array(
          [
            'code' => '202309001',
            'status' => 'selesai',
            'servicetype' => 'analog',
            'via' => 'telepon/fax',
            'priority' => 'biasa',
            'submittedby' => 'plg',
            'source' => 'pelanggan',
            'subject' => '(asia) siaran bersemut',
            'description' => 'Jl. Tg. Datuk No. 219 ( kedai kopi meranti ) 085376307866',
            'solution' => 'perbaikan sambungna kabel
            ts arafik/rances
            cs inneke',
            'acceptedby' => 'Ineke Putri',
            'acceptedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-21 12:11:35'),
            'updatedby' => 'Junaidi',
            'updatedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-22 08:50:30'),
            'customerid' => 1,
          ],
          [
            'code' => '202302001',
            'status' => 'selesai',
            'servicetype' => 'internet',
            'via' => 'telepon/fax',
            'priority' => 'biasa',
            'submittedby' => 'Pelanggan',
            'source' => 'pelanggan',
            'subject' => '(asia) modem loss',
            'description' => 'Jl. Kuantan 1 Gg. Buntu No. 26 (depan SDN 132), 081268027441',
            'solution' => 'splashing ulang
            rio/ferdino
            cs ayu',
            'acceptedby' => 'Lili',
            'acceptedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-02-02 16:49:24'),
            'updatedby' => 'Junaidi',
            'updatedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-02-06 09:16:21'),
            'customerid' => 2
          ],
          [
            'code' => '201910001',
            'status' => 'selesai',
            'servicetype' => 'tv',
            'via' => 'telepon/fax',
            'priority' => 'biasa',
            'submittedby' => 'DARWISON II',
            'source' => 'pelanggan',
            'subject' => '(SMART) siaran tidak ada (ts harianto/ogi)',
            'description' => 'info plgn siaran tidak ada, mhn kunjungan teknisi. Jl. Sudirman No. 235 Kantor Kementrian Agama (Ruangan Kanwil)  082386655301/082225121888',
            'solution' => 'Telah dilakukan penggantian stb rusak
            stb lama : 72700718
            stb ganti : 31400012',
            'acceptedby' => 'Lecya Dekco',
            'acceptedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2019-10-31 13:24:27'),
            'updatedby' => 'Agus Mianto',
            'updatedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2019-11-05 08:18:21'),
            'customerid' => 3
          ],
          [
            'code' => '201912001',
            'status' => 'selesai',
            'servicetype' => 'tv',
            'via' => 'telepon/fax',
            'priority' => 'biasa',
            'submittedby' => 'DARWISON II',
            'source' => 'pelanggan',
            'subject' => '(smart) signal is not good (ts harianto/ogi)',
            'description' => 'info pelanggan signal is not good, mhn kunjungan teknisi. Jl. Sudirman No. 235 Kantor Kementrian Agama (Ruangan Kanwil) 0822-2512-1888',
            'solution' => '	penyambungan kabel putus',
            'acceptedby' => 'Lecya Dekco',
            'acceptedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2019-12-16 15:31:06'),
            'updatedby' => 'Agus Mianto',
            'updatedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2019-12-19 08:09:25'),
            'customerid' => 3
          ],
          [
            'code' => '202210001',
            'status' => 'selesai',
            'servicetype' => 'tv',
            'via' => 'telepon/fax',
            'priority' => 'biasa',
            'submittedby' => 'Pelanggan',
            'source' => 'pelanggan',
            'subject' => '	(Smart) upgrade stb kvision',
            'description' => '	(Smart) upgrade stb kvision',
            'solution' => '	Dabel SPK',
            'acceptedby' => 'Ayu Mardiah Putri',
            'acceptedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2022-10-31 13:03:13'),
            'updatedby' => 'Ricky',
            'updatedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2022-10-31 13:50:39'),
            'customerid' => 3
          ],
          [
            'code' => '202210001',
            'status' => 'selesai',
            'servicetype' => 'tv',
            'via' => 'telepon/fax',
            'priority' => 'biasa',
            'submittedby' => 'Pelanggan',
            'source' => 'pelanggan',
            'subject' => '(Smart) pemutusan',
            'description' => 'Jl. Sudirman No. 235 Kantor Kementrian Agama (Ruangan Kanwil) 082386655301',
            'solution' => 'alat sudah diambil toni/david cs ayu',
            'acceptedby' => 'Ayu Mardiah Putri',
            'acceptedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2022-10-31 14:08:50'),
            'updatedby' => 'Junaidi',
            'updatedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2022-11-02 08:36:29'),
            'customerid' => 3
          ],
          [
            'code' => '202112001',
            'status' => 'selesai',
            'servicetype' => 'analog',
            'via' => 'telepon/fax',
            'priority' => 'biasa',
            'submittedby' => 'plg',
            'source' => 'pelanggan',
            'subject' => '(ASIA) SIARAN TIDAK ADA',
            'description' => 'JL. Setia Budi Gg. Indrapuri No. 1 A 081365356577',
            'solution' => '	efek mati lampu fran/yoga cs ayu',
            'acceptedby' => 'Ayu Mardiah Putri',
            'acceptedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2021-12-11 12:16:45'),
            'updatedby' => 'Junaidi',
            'updatedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2021-12-17 08:46:54'),
            'customerid' => 6
          ],
          [
            'code' => '202112002',
            'status' => 'selesai',
            'servicetype' => 'analog',
            'via' => 'telepon/fax',
            'priority' => 'biasa',
            'submittedby' => 'plg',
            'source' => 'pelanggan',
            'subject' => '(ASIA) SIARAN TIDAK ADA',
            'description' => 'JL. Setia Budi Gg. Indrapuri No. 1 A 081365356577',
            'solution' => 'ganti jek tv',
            'acceptedby' => 'Ayu Mardiah Putri',
            'acceptedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2021-12-13 10:06:38'),
            'updatedby' => 'Junaidi',
            'updatedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2021-12-17 08:44:35'),
            'customerid' => 6
          ],
          [
            'code' => '202205001',
            'status' => 'selesai',
            'servicetype' => 'analog',
            'via' => 'telepon/fax',
            'priority' => 'biasa',
            'submittedby' => 'plg',
            'source' => 'pelanggan',
            'subject' => '(ASIA) siaran tidak ada',
            'description' => 'JL. Setia Budi Gg. Indrapuri No. 1 A 081365356577',
            'solution' => 'setting tv ferdino/yoga',
            'acceptedby' => 'Ayu Mardiah Putri',
            'acceptedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2022-05-17 15:38:18'),
            'updatedby' => 'Junaidi',
            'updatedbydate' => Carbon::createFromFormat('Y-m-d H:i:s', '2022-05-28 08:40:25'),
            'customerid' => 6
          ],
        );

        foreach($arr as $data) {
          Complain::create($data);
        }
    }
}
