<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'type',
        'amount',
        'date',
        'client_id',
        'user_id',
        'booking_id',
    ];
    public function client() {
        return $this->belongsTo('App\Client','client_id');
    }

    public function user() {
        return $this->belongsTo('App\User','user_id');
    }

    public function booking() {
        return $this->belongsTo('App\Booking','booking_id');
    }
}
