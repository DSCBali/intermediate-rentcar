<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nik',
        'name',
        'dob',
        'phone',
        'address',
        'gender',
    ];

    public function booking() {
        return $this->hasMany('App\Booking','client_id');
    }

    public function payment() {
        return $this->hasMany('App\Payment','client_id');
    }
}
