<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marketer;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'member',
        'name',
        'company',
        'identity',
        'address',
        'city',
        'email',
        'vip',
        'effectivedate',
        'homephone',
        'officephone',
        'cellphone',
        'paytype',
        'billperiod',
        'subsperiod',
        'tvcount',
        'node',
        'status',
        'statusdate',
        'notes',
        'marketerid',
    ];
    
    public function marketer() { return $this->belongsTo(Marketer::class,'marketerid'); }
}
