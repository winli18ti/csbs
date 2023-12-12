<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

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
    'serialnumber',
    'smartcard',
    'modemnumber',
    'modemip',
    'modemmac',
    'cpeip',
    'cpemac',
    'inputdate',
    'startdate',
    'enddate',
    'officerid1',
    'officerid2',
    'node',
    'reason',
    'solution',
    'customerid',
  ];

  public function customer()
  {
    return $this->belongsTo(Customer::class, 'customerid');
  }

  //Officer::find(id_officer_nya)->name ==> controller
  //App\Models\Officer::find(id_officernya)->name ==> view
}
