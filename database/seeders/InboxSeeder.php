<?php

namespace Database\Seeders;

use App\Models\Inbox;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InboxSeeder extends Seeder
{
  public function run(): void
  {
    $arr = array(
      [
        'status' => 'unread',
        'inboxdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-12-19 09:47:01'),
        'sender' => '+6285333768033',
        'message' => '** Selamat Nomor 085355305530! +2000 COIN PULSA Anda Sudah Masuk. SEGERA Ambil di *500*55#, Kumpul & Tukar Jd PULSA Sebelum Hangus! Hub *500*55# & Pilih 1 YA!',
        'processed' => 'false',
      ],
      [
        'status' => 'unread',
        'inboxdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2024-01-09 16:14:27'),
        'sender' => '+6285264494477',
        'message' => 'Ok',
        'processed' => 'false',
      ],
      [
        'status' => 'unread',
        'inboxdate' => Carbon::createFromFormat('Y-m-d H:i:s', '2024-01-15 19:53:18'),
        'sender' => '+628127663188',
        'message' => 'Barusan sdh transfer thansk',
        'processed' => 'false',
      ],
    );

    foreach($arr as $data) {
      Inbox::create($data);
    }
  }
}
