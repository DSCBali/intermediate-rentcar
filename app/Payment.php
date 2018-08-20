<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        'type',
        'amount',
        'date'
    ];

    public function paymentEmployee(){
        return $this->belongsTo('App\Employee', 'id');
    }

    public function paymentClient(){
        return $this->belongsTo('App\Client', 'id');
    }

    public function paymentBooking(){
        return $this->belongsTo('App\Booking', 'id');
    }
}
