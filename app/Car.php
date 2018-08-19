<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $fillable = [
        'name',
        'year',
        'license_plate',
        'price',
        'type',
        'brand_id'
    ];
    
    public function brand(){
        return $this->belongsTo('App\CarBrand','brand_id');
    }
}
