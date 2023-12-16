<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  public function run(): void
  {
    $arr = array(
      [
        'name' => 'Herawati Zhen',
        'email' => 'zhen',
        'password' => 'zhen',
        'role' => 'admin',
      ],
      [
        'name' => 'Ineke Putri',
        'email' => 'ineke.putri',
        'password' => 'ineke.putri',
        'role' => 'cs',
      ],
      [
        'name' => 'Lili',
        'email' => 'lili',
        'password' => 'lili',
        'role' => 'cs',
      ],
    );

    foreach($arr as $data) {
      User::create($data);
    }
  }
}
