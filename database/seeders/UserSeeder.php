<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Winli',
            'email' => 'winli@gmail.com',
            'password' => 'winli123',
            'status_user' => 1,
        ]);
        User::create([
            'name'=> 'Eurico',
            'email' => 'eurico@gmail.com',
            'password' => 'eurico123',
            'status_user' => 2,
        ]);
    }
}
