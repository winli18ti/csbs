<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'kode', 'subyek', 'layanan', 'prioritas', 'diterima', 'durasi', 'status', 'id_customer', 'id_layanan',
    ];
}
