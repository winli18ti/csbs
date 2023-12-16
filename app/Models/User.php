<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
  use HasFactory, Notifiable, HasApiTokens;

  protected $fillable = [
    'id',
    'name',
    'email',
    'password',
    'role',
    'notes',
    'status'
  ];

  protected $casts = ['password' => 'hashed',];

  public function invoices()
  {
    return $this->hasMany(Invoice::class, 'userid');
  }
}
