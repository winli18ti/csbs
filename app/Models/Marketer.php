<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'status',
    ];

    public function users() {
        return $this->hasMany(Customer::class, 'marketerid');
    }
}
