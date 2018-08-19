<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;
use App\Client;
use App\Booking;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['car'] = count(Car::get());
        $data['client'] = count(Client::get());
        $data['bookingcomplete'] = count(Booking::where('status', 'PAID')->get());
        $data['bookinguncomplete'] = count(Booking::where('status', 'PROCESS')->get());
        
        return view('pages.home',$data);
    }
}
