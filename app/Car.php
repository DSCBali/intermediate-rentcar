<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name',
        'license_plat',
        'price',
        'type',
        'brand_id'
    ];

    // public function carBrand(){
    //     return $this->belongsTo('App\CarBrand');
    // }

    public function carBrand(){
        return $this->belongsTo('App\CarBrand');
    }

    public function carBooking(){
        return $this->hasMany('App\Booking', 'car_id');
    }
}
