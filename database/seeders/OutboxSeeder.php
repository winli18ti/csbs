<?php

namespace Database\Seeders;

use App\Models\Outbox;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OutboxSeeder extends Seeder
{
  public function run(): void
  {
    $arr = array(
      [
        'outboxdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-12-19 14:06:52'),
        'receiver' => '+628127528738',
        'message' => 'Yth. Plggn ASIASMARTMEDIA (SURIPTO), IURAN TV KABEL Anda per 15/10/23 s/d 14/01/24 (3 bln) sebesar Rp 390.000,- SDH LEWAT JATUH TEMPO. Info CS : 085271493336',
        'modemid' => 'WVCOM',
        'status' => 'SendingOKNoReport',
      ],
      [
        'outboxdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-12-19 15:33:58'),
        'receiver' => '+6282268860600',
        'message' => 'Yth. Plggn ASIASMARTMEDIA (NOVIA PUTRI RATNASARI), IURAN TV KABEL Anda per 15 Okt 2023 s/d 14 Jan 2024 sebesar Rp 240.000,- SDH LEWAT JATUH TEMPO.',
        'modemid' => 'WVCOM',
        'status' => 'SendingOKNoReport',
      ],
      [
        'outboxdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-12-19 19:19:22'),
        'receiver' => '+6285278596922',
        'message' => 'Yth. Plggn ASIASMARTMEDIA (HARJANI), IURAN TV KABEL Anda per 01 Jan 2024 (Promo 6 bln) sebesar Rp 730.000,- SDH LEWAT JATUH TEMPO. Info CS : 085271493336',
        'modemid' => 'WVCOM',
        'status' => 'SendingError',
      ],
    );

    foreach($arr as $data) {
      Outbox::create($data);
    }
  }
}
