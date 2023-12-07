<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class TvDigital extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'serialnumber',
    'smartcard',
    'customerid',
  ];

  public function customer()
  {
    return $this->belongsTo(Customer::class, 'customerid');
  }
}
