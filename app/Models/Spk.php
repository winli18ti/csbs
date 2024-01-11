<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Spk extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'category',
    'spknumber',
    'service',
    'servicetype',
    'status',
    'tvanalog',
    'tvdigital',
    // 'serialnumber',
    // 'smartcard',
    'modemnumber',
    'modemip',
    'modemmac',
    'cpeip',
    'cpemac',
    'cpegateway',
    'inputdate',
    'startdate',
    'enddate',
    'officerid1',
    'officerid2',
    'nodeid',
    'reason',
    'solution',
    'customerid',
    'customerserviceid',
  ];

  public function customer()
  {
    return $this->belongsTo(Customer::class, 'customerid');
  }

  public function node() 
  {
    return $this->belongsTo(Node::class, 'nodeid');
  }

  protected function data(): Attribute{
      return Attribute::make(
          get: fn ($value) => json_decode($value, true),
          set: fn ($value) => json_encode ($value),
      );
  }

  protected function data_update(): Attribute{
      return Attribute::make(
          get: fn ($value) => json_decode($value, true),
          set: fn ($value) => json_encode($value),
      );
  }

  //Officer::find(id_officer_nya)->name ==> controller
  //App\Models\Officer::find(id_officernya)->name ==> view
}
