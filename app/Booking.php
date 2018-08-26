<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'booking_code',
        'order_date',
        'rental_date',
        'return_date',
        'price',
        'status',
        'fine',
        'user_id',
        'car_id',
        'client_id',
    ];

    public function user() {
        return $this->belongsTo('App\User','user_id');
    }

    public function car() {
        return $this->belongsTo('App\Car','car_id');
    }

    public function client() {
        return $this->belongsTo('App\Client','client_id');
    }

    public function payment() {
        return $this->hasMany('App\Payment','booking_id');
    }
}
