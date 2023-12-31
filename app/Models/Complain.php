<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Complain extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'code',
    'status',
    'priority',
    'servicetype',
    'via',
    'source',
    'submittedby',
    'subject',
    'description',
    'solution',
    'acceptedby',
    'acceptedbydate',
    'updatedby',
    'updatedbydate',
    'customerid',
  ];

  public function customer()
  {
    return $this->belongsTo(Customer::class, 'customerid');
  }
}
