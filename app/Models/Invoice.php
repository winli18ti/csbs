<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model{
    use HasFactory;

    protected $fillable = [
        'id', 'jenis', 'periode', 'nama_layanan', 'frekuensi',
        'tagihan', 'status', 'tanggal_lunas', 'adm_lunas',
        'id_user', 'id_customer', 'id_layanan',
    ];
}
