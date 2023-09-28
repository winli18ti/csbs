<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Alamat extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'alamat', 'kelurahan', 'kecamatan', 'kota',
        'provinsi', 'kode_pos', 'customer_id',
    ];

    public function customer() { return $this->hasMany(Customer::class,'id_user','id'); }
}
