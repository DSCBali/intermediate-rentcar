<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $payment = new Payment;
        $datas = $payment->all();
        return view('pages.payment.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = Payment::get();
        return view('pages.payment.create');
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
            'type' => 'required',
            'amount' => 'required',
            'date' => 'required',
            'client_id' => 'required',
            'employee_id' => 'required',
            'booking_id' => 'required'
        ]);

        $insert = [
            'type'=> $request->type,
            'amount'=> $request->amount,
            'date'=> $request->date,
            'client_id'=> $request->client_id,
            'employee_id'=> $request->employee_id,
            'booking_id'=> $request->booking_id
        ];

        $datas = Payment::create($insert);
        return redirect()->route('payment.index');
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
        $payment = new Payment;
        $oldPayment = $payment->where('id', $id)->first();
        return view('pages.payment.edit')->with('payment', $oldPayment);
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
            'type' => 'required',
            'amount' => 'required',
            'date' => 'required',
            'client_id' => 'required',
            'employee_id' => 'required',
            'booking_id' => 'required'
        ]);

        $insert = [
            'type'=> $request->type,
            'amount'=> $request->amount,
            'date'=> $request->date,
            'client_id'=> $request->client_id,
            'employee_id'=> $request->employee_id,
            'booking_id'=> $request->booking_id
        ];

        $datas = Payment::where('id', $id)->update($insert);
        return redirect()->route('payment.index');
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
