<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Alamat;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'nama_customer', 'nama_perusahaan', 'no_ktp', 'tanggal_lahir', 'no_hp', 'telepon_rumah', 'email', 'tanggal_registrasi', 'status_vip', 'id_user', 'id_alamat',
    ];

    public function user() { return $this->belongsTo(User::class,'id_user'); }
    public function alamat() { return $this->belongsTo(Alamat::class,'id_alamat'); }
}
