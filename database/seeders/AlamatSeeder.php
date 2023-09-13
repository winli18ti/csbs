<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alamat;

class AlamatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alamat::create([
            'alamat' => 'Jl A',
            'kelurahan' => 'Kel A',
            'kecamatan' => 'kec A',
            'kota' => 'kota A',
            'provinsi' => 'Prov A',
            'kode_pos' => 12344,
        ]);
    }
}
