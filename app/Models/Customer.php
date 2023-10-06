<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marketer;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'member',
        'name',
        'company',
        'identity',
        'address',
        'city',
        'email',
        'vip',
        'effectivedate',
        'homephone',
        'officephone',
        'cellphone',
        'paytype',
        'billperiod',
        'tvcount',
        'node',
        'status',
        'statusdate',
        'marketerid',
        'notes',
    ];
    
    public function marketer() { return $this->belongsTo(Marketer::class,'marketerid'); }

    public function complains() {
        return $this->hasMany(Complain::class, 'customerid');
    }

    public function customerServices() {
        return $this->hasMany(CustomerService::class, 'customerid');
    }

    public function installations() {
        return $this->hasMany(Installation::class, 'customerid');
    }

    public function internets() {
        return $this->hasMany(Internet::class, 'customerid');
    }

    public function invoices() {
        return $this->hasMany(Invoice::class, 'customerid');
    }

    public function spks() {
        return $this->hasMany(Spk::class, 'customerid');
    }

    public function tvanalogs() {
        return $this->hasMany(TvAnalog::class, 'customerid');
    }

    public function tvdigitals() {
        return $this->hasMany(TvDigital::class, 'customerid');
    }
}
