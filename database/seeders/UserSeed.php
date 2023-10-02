<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        User::create([
            'name' => 'admin1',
            'username' => 'admin1',
            'password' => 'admin1',
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'admin2',
            'username' => 'admin2',
            'password' => 'admin2',
            'role' => 'admin',
        ]);
    }
}
