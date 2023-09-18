<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodeBayarCustomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'siklus', 'periode', 'cara_pembayaran', 'status', 'id_customer', 'id_alamat',
    ];
}
