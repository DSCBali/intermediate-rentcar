@extends('layouts.app')

@section('page')
    Detail Payment {{$booking->booking_code}}
@endsection

@section('header')
    <li class="breadcrumb-item">Booking</li>
    <li class="breadcrumb-item active">Detail Payment - {{$booking->booking_code}}</li>
@endsection

@section('content')
    <div class="row">
        @if(count($booking->payment)==1)
        <div class="col-md-3"></div>
        <div class="col-md-6">
        @else
        <div class="col-md-12">
        @endif
            <h5>Detail Payment - {{$booking->booking_code}}</h5>
            <div id="card-advance" class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Booking Code</label>
                                <span class="help"></span>
                                <p>{{$booking->booking_code}}</p>
                            </div>
                            <div class="form-group form-group-default">
                                <label>Order Date</label>
                                <span class="help"></span>
                                <p>{{date('d-M-Y', strtotime($booking->order_date))}}</p>
                            </div>
                            <div class="form-group form-group-default">
                                <label>Price</label>
                                <span class="help"></span>
                                <p>Rp {{number_format($booking->price,0,',','.')}}</p>
                            </div>
                            <div class="form-group form-group-default">
                                <label>Car</label>
                                <span class="help"></span>
                                <p>{{$booking->car->brand->name}} {{$booking->car->name}}</p>
                            </div>
                            <div class="form-group form-group-default">
                                <label>Client</label>
                                <span class="help"></span>
                                <p>{{$booking->client->name}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Rental Date</label>
                                <span class="help"></span>
                                <p>{{date('d-M-Y', strtotime($booking->rental_date))}}</p>
                            </div>
                            <div class="form-group form-group-default">
                                <label>Return Date</label>
                                <span class="help"></span>
                                <p>{{date('d-M-Y', strtotime($booking->return_date))}}</p>
                            </div>
                            <div class="form-group form-group-default">
                                <label>Fine</label>
                                <span class="help"></span>
                                <p>Rp {{number_format($booking->fine,0,',','.')}}</p>
                            </div>            
                            <div class="form-group form-group-default">
                                <label>Status</label>
                                <span class="help"></span>
                                <p class="bold @if($booking->status=='PROCESS') text-warning @else text-success @endif">{{$booking->status}}</p>
                            </div>
                            <div class="form-group form-group-default">
                                <label>Cashier</label>
                                <span class="help"></span>
                                <p>{{$booking->user->name}}</p>
                            </div>
                        </div>
                    </div>
                    <h4 align="center">Payment</h4>
                    <div class="row">
                        @if(count($booking->payment)==1)
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                <div class="form-group form-group-default">
                                    <label>Type</label>
                                    <span class="help"></span>
                                    <p class="bold @if($booking->payment[0]->type=='DP') text-warning @else text-success @endif">{{$booking->payment[0]->type}}</p>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Amount</label>
                                    <span class="help"></span>
                                    <p>Rp {{number_format($booking->payment[0]->amount,0,',','.')}}</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-default">
                                    <label>Cashier</label>
                                    <span class="help"></span>
                                    <p>{{$booking->payment[0]->user->name}}</p>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Date</label>
                                    <span class="help"></span>
                                    <p>{{date('d-M-Y', strtotime($booking->payment[0]->date))}}</p>
                                </div>
                            </div>
                        @else
                            @foreach($booking->payment as $pay)
                            <div class="col-md-3">
                                <div class="form-group form-group-default">
                                    <label>Type</label>
                                    <span class="help"></span>
                                    <p class="bold @if($booking->payment->type=='DP') text-warning @else text-success @endif">{{$booking->payment->type}}</p>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Amount</label>
                                    <span class="help"></span>
                                    <p>Rp {{number_format($booking->payment->amount,0,',','.')}}</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-default">
                                    <label>Cashier</label>
                                    <span class="help"></span>
                                    <p>{{$booking->payment->user->name}}</p>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Date</label>
                                    <span class="help"></span>
                                    <p>{{date('d-M-Y', strtotime($booking->payment->date))}}</p>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <p align="center"><a href="{{route('booking.index')}}" class="btn btn-info btn-con">Back</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection