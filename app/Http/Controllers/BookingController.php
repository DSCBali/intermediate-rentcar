<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = new Booking;
        $datas = $booking->all();
        return view('pages.booking.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = Booking::get();
        return view('pages.booking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'booking_code' => 'required',
            'order_date' => 'required',
            'rental_date' => 'required',
            'return_date' => 'required',
            'price' => 'required',
            'status' => 'required',
            'fine' => 'required',
            'car_id' => 'required',
            'client_id' => 'required'
        ]);

        $insert = [
            'booking_code'=> $request->booking_code,
            'order_date'=> $request->order_date,
            'rental_date'=> $request->rental_date,
            'return_date'=> $request->return_date,
            'price'=> $request->price,
            'status'=> $request->status,
            'fine'=> $request->fine,
            'car_id'=> $request->car_id,
            'client_id'=> $request->client_id
        ];

        $datas = Booking::create($insert);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = new Booking;
        $oldBooking = $booking->where('id', $id)->first();
        return view('pages.booking.edit')->with('booking', $oldBooking);
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
        $this->validate($request, [
            'booking_code' => 'required',
            'order_date' => 'required',
            'rental_date' => 'required',
            'return_date' => 'required',
            'price' => 'required',
            'status' => 'required',
            'fine' => 'required',
            'car_id' => 'required',
            'client_id' => 'required'
        ]);

        $insert = [
            'booking_code'=> $request->booking_code,
            'order_date'=> $request->order_date,
            'rental_date'=> $request->rental_date,
            'return_date'=> $request->return_date,
            'price'=> $request->price,
            'status'=> $request->status,
            'fine'=> $request->fine,
            'car_id'=> $request->car_id,
            'client_id'=> $request->client_id
        ];

        $datas = Booking::where('id', $id)->update($insert);
        return redirect()->route('booking.index');
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
