<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\CustomerService;

class TvDigital extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'serialnumber',
        'smartcard',
        'customerid',
        'customerserviceid',
    ];

    public function customer() { return $this->belongsTo(Customer::class,'customerid'); }
    public function customerservice() { return $this->belongsTo(CustomerService::class,'customerserviceid'); }
}
