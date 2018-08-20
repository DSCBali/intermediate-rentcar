<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'booking_code', 'order_date', 'rental_date', 'return_date', 'price', 'status', 'fine', 'car_id'
    ];

    public function bookingEmployee(){
        return $this->belongsTo('App\Employee', 'car_id');
    }

    public function bookingCar(){
        return $this->belongsTo('App\Car', 'brand_id');
    }

    public function bookingClient(){
        return $this->belongsTo('App\Client', 'id');
    }

    public function bookingPayment(){
        return $this->hasMany('App\Payment', 'booking_id');
    }
}
