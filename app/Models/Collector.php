<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collector extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'name',
    'status',
  ];

  public function invoices()
  {
    return $this->hasMany(Invoice::class, 'collectorid');
  }
}
