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
    'name',
    'info',
    'price',
    'note',
    'status',
    'condition',
    'date',
    'subsperiod',
    'setmain',
    'customerid',
    'serviceid',
  ];

  public function service()
  {
    return $this->belongsTo(Service::class, 'serviceid');
  }
  public function customer()
  {
    return $this->belongsTo(Customer::class, 'customerid');
  }

  public function installations()
  {
    return $this->hasMany(Installation::class, 'customerserviceid');
  }
}
