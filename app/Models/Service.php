<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'name',
    'info',
    'type',
    'price',
  ];

  public function customerServices()
  {
    return $this->hasMany(CustomerService::class, 'serviceid');
  }

  public function invoices()
  {
    return $this->hasMany(Invoice::class, 'serviceid');
  }
}
