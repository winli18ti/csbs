<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Service;

class CustomerService extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'specialname',
        'specialprice',
        'specialinfo',
        'status',
        'sincedate',
        'serviceid',
        'customerid',
    ];
    
    public function service() { return $this->belongsTo(Service::class,'serviceid'); }
    public function customer() { return $this->belongsTo(Customer::class,'customerid'); }
}
