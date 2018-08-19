<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        'type',
        'amount',
        'date',
        'booking_id',
        'client_id',	
        'employee_id'
    ];
}
