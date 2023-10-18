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
        'username' => 'zhen',
        'password' => 'zhen',
        'role' => 'admin',
      ],
      [
        'name' => 'Ineke Putri',
        'username' => 'ineke.putri',
        'password' => 'ineke.putri',
        'role' => 'cs',
      ],
      [
        'name' => 'Lili',
        'username' => 'lili',
        'password' => 'lili',
        'role' => 'cs',
      ],
    );

    foreach($arr as $data) {
      User::create($data);
    }
  }
}
