<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'node',
  ];

  public function customers()
  {
    return $this->hasMany(Customer::class, 'nodeid');
  }

  public function spks()
  {
    return $this->hasMany(Spk::class, 'nodeid');
  }
}
