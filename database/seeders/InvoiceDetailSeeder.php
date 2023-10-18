<?php

namespace Database\Seeders;

use App\Models\InvoiceDetail;
use Illuminate\Database\Seeder;

class InvoiceDetailSeeder extends Seeder
{
  /*
  id, info, price, invoiceid
  */
  
    public function run(): void
    {
        $arr = array(
          [
            'info' => 'Biaya aktivasi Layanan TV (20 September 2023 - 19 Oktober 2023)',
            'price' => 100000,
            'invoiceid' => 1,
          ],
          [
            'info' => 'Titipan deposit pelanggan',
            'price' => 150000,
            'invoiceid' => 1,
          ],
          [
            'info' => 'Iuran Regular TV (20 Oktober 2023 - 14 Nopember 2023) = 26 hari',
            'price' => 61000,
            'invoiceid' => 2,
          ],
          [
            'info' => 'Biaya Jasa Kolektor',
            'price' => 5000,
            'invoiceid' => 2,
          ],
          [
            'info' => 'Iuran Regular TV (15 Nopember 2023 - 14 Desember 2023)',
            'price' => 70000,
            'invoiceid' => 3,
          ],
          [
            'info' => 'Biaya Jasa Kolektor',
            'price' => 5000,
            'invoiceid' => 3,
          ],
          [
            'info' => 'Layanan ASM Internet 10 Mbps (15 Agustus 2023 - 14 September 2023)',
            'price' => 200000,
            'invoiceid' => 4,
          ],
          [
            'info' => 'denda',
            'price' => 10000,
            'invoiceid' => 4,
          ],
          [
            'info' => 'Layanan ASM Internet 10 Mbps (15 September 2023 - 14 Oktober 2023)',
            'price' => 200000,
            'invoiceid' => 5,
          ],
          [
            'info' => 'denda',
            'price' => 10000,
            'invoiceid' => 5,
          ],
          [
            'info' => 'Layanan ASM Internet 10 Mbps (15 Oktober 2023 - 14 Nopember 2023)',
            'price' => 200000,
            'invoiceid' => 6,
          ],
          [
            'info' => 'Layanan SMART TV Promo November 2012 (01 Oktober 2022 - 31 Oktober 2022)',
            'price' => 120000,
            'invoiceid' => 7,
          ],
          [
            'info' => 'Penambahan Decoder 1 STB (01 Oktober 2022 - 31 Oktober 2022)',
            'price' => 80000,
            'invoiceid' => 7,
          ],
          [
            'info' => 'Biaya Jasa Kolektor',
            'price' => 5000,
            'invoiceid' => 7,
          ],
          [
            'info' => 'Layanan SMART TV Promo November 2012 (01 Nopember 2022 - 30 Nopember 2022)',
            'price' => 120000,
            'invoiceid' => 8,
          ],
          [
            'info' => 'Penambahan Decoder 1 STB (01 Nopember 2022 - 30 Nopember 2022)',
            'price' => 80000,
            'invoiceid' => 8,
          ],
          [
            'info' => 'Iuran Regular TV (01 Desember 2022 - 31 Desember 2022)',
            'price' => 70000,
            'invoiceid' => 9,
          ],
          [
            'info' => 'Biaya Jasa Kolektor',
            'price' => 5000,
            'invoiceid' => 9,
          ],
          [
            'info' => 'Iuran Regular TV (01 Januari 2023 - 31 Januari 2023)',
            'price' => 70000,
            'invoiceid' => 10,
          ],
          [
            'info' => 'Biaya Jasa Kolektor',
            'price' => 5000,
            'invoiceid' => 10,
          ],
          [
            'info' => 'Iuran Regular TV (01 September 2023 - 30 September 2023)',
            'price' => 70000,
            'invoiceid' => 11,
          ],
          [
            'info' => 'Biaya Jasa Kolektor',
            'price' => 5000,
            'invoiceid' => 11,
          ],
          [
            'info' => 'Iuran Regular TV (01 Oktober 2023 - 31 Oktober 2023)',
            'price' => 70000,
            'invoiceid' => 12,
          ],
          [
            'info' => 'Biaya Jasa Kolektor',
            'price' => 5000,
            'invoiceid' => 12,
          ],
        );

        foreach($arr as $data) {
          InvoiceDetail::create($data);
        }
    }
}
