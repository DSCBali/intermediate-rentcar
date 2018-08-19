<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Client;
use Illuminate\Foundation\Auth\Client as Authenticatable;

class Client extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 
        'password',
        'nik',
        'name',
        'phone',
        'date_of_birth',
        'alamat',
        'gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
        //, 'remember_token',
    ];


    public function clientBooking(){
        return $this->hasMany('App\Booking', 'client_id');
    }

    public function clientPayment(){
        return $this->hasMany('App\Payment', 'client_id');
    }
}
