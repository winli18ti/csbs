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
            'type' => 'biaya layanan',
            'info' => 'Biaya aktivasi Layanan TV (20 September 2023 - 19 Oktober 2023)',
            'price' => 100000,
            'invoiceid' => 1,
          ],
          [
            'type' => 'biaya lain',
            'info' => 'Titipan deposit pelanggan',
            'price' => 150000,
            'invoiceid' => 1,
          ],
          [
            'type' => 'biaya layanan',
            'info' => 'Iuran Regular TV (20 Oktober 2023 - 14 Nopember 2023) = 26 hari',
            'price' => 61000,
            'invoiceid' => 2,
          ],
          [
            'type' => 'biaya jasa kolektor',
            'info' => 'Biaya Jasa Kolektor',
            'price' => 5000,
            'invoiceid' => 2,
          ],
          [
            'type' => 'biaya layanan',
            'info' => 'Iuran Regular TV (15 Nopember 2023 - 14 Desember 2023)',
            'price' => 70000,
            'invoiceid' => 3,
          ],
          [
            'type' => 'biaya jasa kolektor',
            'info' => 'Biaya Jasa Kolektor',
            'price' => 5000,
            'invoiceid' => 3,
          ],
          [
            'type' => 'biaya layanan',
            'info' => 'Layanan ASM Internet 10 Mbps (15 Agustus 2023 - 14 September 2023)',
            'price' => 200000,
            'invoiceid' => 4,
          ],
          [
            'type' => 'biaya denda',
            'info' => 'denda',
            'price' => 10000,
            'invoiceid' => 4,
          ],
          [
            'type' => 'biaya layanan',
            'info' => 'Layanan ASM Internet 10 Mbps (15 September 2023 - 14 Oktober 2023)',
            'price' => 200000,
            'invoiceid' => 5,
          ],
          [
            'type' => 'biaya denda',
            'info' => 'denda',
            'price' => 10000,
            'invoiceid' => 5,
          ],
          [
            'type' => 'biaya layanan',
            'info' => 'Layanan ASM Internet 10 Mbps (15 Oktober 2023 - 14 Nopember 2023)',
            'price' => 200000,
            'invoiceid' => 6,
          ],
          [
            'type' => 'biaya layanan',
            'info' => 'Layanan SMART TV Promo November 2012 (01 Oktober 2022 - 31 Oktober 2022)',
            'price' => 120000,
            'invoiceid' => 7,
          ],
          [
            'type' => 'penambahan tv',
            'info' => 'Penambahan Decoder 1 STB (01 Oktober 2022 - 31 Oktober 2022)',
            'price' => 80000,
            'invoiceid' => 7,
          ],
          [
            'type' => 'biaya jasa kolektor',
            'info' => 'Biaya Jasa Kolektor',
            'price' => 5000,
            'invoiceid' => 7,
          ],
          [
            'type' => 'biaya layanan',
            'info' => 'Layanan SMART TV Promo November 2012 (01 Nopember 2022 - 30 Nopember 2022)',
            'price' => 120000,
            'invoiceid' => 8,
          ],
          [
            'type' => 'penambahan tv',
            'info' => 'Penambahan Decoder 1 STB (01 Nopember 2022 - 30 Nopember 2022)',
            'price' => 80000,
            'invoiceid' => 8,
          ],
          [
            'type' => 'biaya layanan',
            'info' => 'Iuran Regular TV (01 Desember 2022 - 31 Desember 2022)',
            'price' => 70000,
            'invoiceid' => 9,
          ],
          [
            'type' => 'biaya jasa kolektor',
            'info' => 'Biaya Jasa Kolektor',
            'price' => 5000,
            'invoiceid' => 9,
          ],
          [
            'type' => 'biaya layanan',
            'info' => 'Iuran Regular TV (01 Januari 2023 - 31 Januari 2023)',
            'price' => 70000,
            'invoiceid' => 10,
          ],
          [
            'type' => 'biaya jasa kolektor',
            'info' => 'Biaya Jasa Kolektor',
            'price' => 5000,
            'invoiceid' => 10,
          ],
          [
            'type' => 'biaya layanan',
            'info' => 'Iuran Regular TV (01 September 2023 - 30 September 2023)',
            'price' => 70000,
            'invoiceid' => 11,
          ],
          [
            'type' => 'biaya jasa kolektor',
            'info' => 'Biaya Jasa Kolektor',
            'price' => 5000,
            'invoiceid' => 11,
          ],
          [
            'type' => 'biaya layanan',
            'info' => 'Iuran Regular TV (01 Oktober 2023 - 31 Oktober 2023)',
            'price' => 70000,
            'invoiceid' => 12,
          ],
          [
            'type' => 'biaya jasa kolektor',
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
