<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Officer;

class OfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            'FRANS SASTOYO SITUMORANG',
            'Sunardi',
            'ROSANGAP SIREGAR',
            'Ferdino',
            'RANCES SITANGGANG',
            'Team-Jaringan 1',
            'Team-Jaringan 2',
            'ARIYEN PRAYOGA',
            'HERMANTO',
            'AIDIL',
            'DAVIDSON',
            'INDRA YULIS',
            'YUDA ANAK MAGANG',
            'DI ANTAR KEKANTOR',
            'KOLEKTOR',
            'TANPATEKNISI',
            'ZULFIKAR',
            'M. ARAFIK',
            'WIYANTO PRAYOGI',
            'ELWIS MANTONI',
            'RIDWAN',
        );

        foreach($data as $name) {
            Officer::create([
                'name' => $name,
                'status' => 'aktif',
            ]);
        }
    }
}
