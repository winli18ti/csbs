<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Layanan::create([
            'nama_layanan' => 'Indihome',
            'tipe_layanan' => '??',
            'keterangan' => '??',
        ]);
    }
}
