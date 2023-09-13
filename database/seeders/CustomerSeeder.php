<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Carbon\Carbon;

class CustomerSeeder extends Seeder{
    public function run(): void{
        for($i = 0; $i < 50; $i++){
            Customer::create([
                'nama_customer' => 'user'.$i,
                'no_ktp' => '2938338'.$i,
                'no_hp' => '02893883'.$i,
                'email' => 'user'.$i.'@gmail.com',
                'tanggal_registrasi' => Carbon::now(),
                'status_vip' => 2,
                'id_user' => 1,
                'id_alamat' => 1,
            ]);
        }
    }
}
