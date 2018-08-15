<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name',
        'year',
        'license_plat',
        'price',
        'type',
        'brand_id',
    ];

    public function brand() {
        return $this->belongsTo('App\CarBrand','brand_id');
    }

    public function booking() {
        return $this->hasMany('App\Booking','car_id');
    }
}
