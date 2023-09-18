<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananCustomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'status_layanan', 'nama_layanan', 'keterangan', 'tanggal_pasang', 'no_decoder', 'no_kartu_pelanggan', 'channel', 'id_alamat', 'id_layanan', 'id_customer',
    ];
}
