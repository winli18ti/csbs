<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'name',
    'username',
    'password',
    'role',
    'notes',
    'status'
  ];

  public function invoices()
  {
    return $this->hasMany(Invoice::class, 'userid');
  }
}
