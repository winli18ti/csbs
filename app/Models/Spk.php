<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Spk extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category',
        'spknumber',
        'service',
        'servicetype',
        'status',
        'statusdate',
        'customerid',
    ];
    
    public function customer() { return $this->belongsTo(Customer::class,'customerid'); }
}
