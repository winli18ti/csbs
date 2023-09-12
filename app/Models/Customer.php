<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'no_ktp', 'alamat', 'tanggal_lahir', 'no_hp', 'telepon_rumah', 'email'
    ];
}
