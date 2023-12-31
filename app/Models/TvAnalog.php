<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class TvAnalog extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'count',
    'customerid',
  ];

  public function customer()
  {
    return $this->belongsTo(Customer::class, 'customerid');
  }
}
