<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Internet extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'modemnumber',
    'modemip',
    'modemmac',
    'cpeip',
    'cpemac',
    'customerid',
  ];

  public function customer()
  {
    return $this->belongsTo(Customer::class, 'customerid');
  }
}
