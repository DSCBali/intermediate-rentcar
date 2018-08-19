<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = [
        'booking_code',
        'order_date',	
        'rental_date',	
        'return_date',
        'price',
        'status',
        'ﬁne',
        'car_id',
        'employee_id',
        'client_id',
    ];
}
