<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outbox extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'outboxdate',
    'receiver',
    'message',
    'modemid',
    'status',
  ];
}
