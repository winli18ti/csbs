<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marketer;

class MarketerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    
    public function run(): void
    {
        $data = array(
            'A11',
            'A2',
            'ADAM GAFUTRA',
            'ADE HANDOYO',
            'ALBER WAHYU PUTRA',
            'ALDI OKTAVERI',
            'AMING CORNER',
            'ANIK HARIYANI',
            'ARJUNA',
            'ARZIA PUTRA',
            'BAMBANG',
            'CSFRONT',
            'DAVID',
            'DEBY SAHPUTRA',
            'DEWI SISWIYANTI',
            'DIAN ASYHARI NST',
            'EDY CORNER',
            'EFRI JHON',
            'ERNI (CORNER SM)',
            'FERDINO',
            'FRANS',
            'HARIANTO',
            'HARRI KURNIAWAN',
            'HENDRI',
            'HERMANTO IKR',
            'IMELDA R. SINAGA',
            'INDRA YULIS',
            'ISWANTO',
            'JOSUA SILALAHI',
            'KARTIKA',
            'M. HARIS',
            'MARION',
            'MARTADINATA',
            'MASHURI',
            'MASRIL',
            'MUHAMMAD BASORI',
            'MUSA PASARIBU',
            'NANIK SUGIARTI',
            'OFFICE-BACKEND',
            'OGI CHANDRA',
            'ORIUS CORNER',
            'Prayoga',
            'PRIO UTOMO',
            'RAHENDRA',
            'RANCES',
            'RESTU',
            'RIKO SAPUTRA',
            'ROLAS',
            'ROSAHGAP',
            'SDFA',
            'SIANTURI',
            'SINAR CORNER',
            'SINTAULI SIDABALOK',
            'SONY ELECTRONIC',
            'SUNARDI',
            'SYAWALUDIN',
            'Team-Jaringan 1',
            'Team-Jaringan 2',
            'WAHYUNI CORNER',
            'WERASDF',
            'WILMAR SITOHANG',
            'YANTI CORNER',
            'ZAMRI',
            'ZULFIKAR',
            'ZULFITRI',
        );

        foreach($data as $name) {
            Marketer::create([
                'name' => $name,
                'status' => 'aktif',
            ]);
        }
    }
}
