<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Employee;
use Illuminate\Foundation\Auth\Employee as Authenticatable;

class Employee extends Authenticatable
{
    use Notifiable;

    protected $guard = 'employee';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public function employeeBooking(){
        return $this->hasMany('App\Booking', 'employee_id');
    }

    public function employeePayment(){
        return $this->hasMany('App\Payment', 'employee_id');
    }   
}
