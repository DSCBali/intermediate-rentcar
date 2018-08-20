<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;
use App\Car;
use App\Client;
use Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::with(['payment','client','user','car' => function($car) {$car->with('brand');}])->orderBy('id','desc')->get();
        // dd($bookings->toArray());

        return view('pages.booking.index',['bookings' => $bookings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::with('brand','booking')->orderBy('id','desc')->get();
        $clients = Client::with('booking')->orderBy('id','desc')->get();

        return view('pages.booking.create',['cars' => $cars,'clients' => $clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reqbooking = $request->validate([
            'order_date' => 'required|date',
            'rental_date' => 'required|date',
            'return_date' => 'required|date',
            'car_id' => 'required|numeric',
            'client_id' => 'required|numeric',
            'user_id' => 'required|numeric',
        ]);
        //booking code
        $data = str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        $code = substr($data,1,8);
        $check = Booking::where('booking_code',$code)->get();
        while(count($check)==1){
            $code = substr($data,1,8);
        }
        $reqbooking['booking_code'] = $code;
        
        //default
        $reqbooking['status'] = "PROCESS";
        $reqbooking['fine'] = 0;
        
        //car price
        $datacar = Car::where('id',$request->car_id)->get();
        $price = $datacar[0]->price;
        $reqbooking['price'] = $price;

        $reqpayment = $request->validate([
            'amount' => 'required|numeric|min:200000',
            'date' => 'required|date',
            'client_id' => 'required|numeric',
            'user_id' => 'required|numeric',
        ]);

        dd($reqpayment);

        // $data = Booking::create($reqbooking);

        //booking id
        $booking_code = $reqbooking['booking_code'];
        $databooking = Booking::where('booking_code',$booking_code)->get();
        $booking_id = $databooking[0]->id;
        $reqpayment['booking_id'] = $booking_id;
        
        //default
        $reqpayment['type'] = "DP";
        
        $data = Payment::create($reqpayment);

        return redirect()->route('booking.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::with(['payment' => function($payment) {$payment->with('user');},'client','user','car' => function($car) {$car->with('brand');}])->where('id', $id)->first();

        return view('pages.booking.show',['booking' => $booking]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
