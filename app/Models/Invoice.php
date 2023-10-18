<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Collector;
use App\Models\Customer;
use App\Models\Service;
use App\Models\User;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'billnumber',
        'servicetype',
        'period',
        'paytype',
        'subsperiod',
        'bill',
        'status',
        'paiddate',
        'info',
        'serviceid',
        'collectorid',
        'customerid',
        'userid',
    ];
    
    public function service() { return $this->belongsTo(Service::class,'serviceid'); }
    public function collector() { return $this->belongsTo(Collector::class,'collectorid'); }
    public function customer() { return $this->belongsTo(Customer::class,'customerid'); }
    public function user() { return $this->belongsTo(User::class,'userid'); }

    public function invoiceDetail() {
        return $this->hasMany(InvoiceDetail::class, 'invoiceid');
    }
}
