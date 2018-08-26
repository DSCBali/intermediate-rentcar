@extends('layouts.app')

@section('page')
    Create Booking
@endsection

@push('header')
    <link href="{{asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
@endpush


@section('header')
    <li class="breadcrumb-item">Booking</li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h5>Create Booking</h5>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div id="card-advance" class="card card-default">
                <div class="card-body">
                    <form action="{{route('booking.store')}}" method="POST" autocomplete="off">
                    {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-default form-group-default-select2 required">
                                    <label>Client</label>
                                    <span class="help"></span>
                                    <select name="client_id" class="full-width" data-placeholder="Select Client!" data-init-plugin="select2" required>
                                        <option value=""></option>
                                        @foreach($clients as $client)
                                            <option value="{{$client->id}}" @if(old('client_id')=="$client->id") selected @endif>{{$client->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group form-group-default required">
                                    <label>Rental Date</label>
                                    <span class="help"></span>
                                    <input type="text" name="rental_date" class="form-control date" placeholder="Put Rental Date!" value="{{old('rental_date')}}" required>
                                    <input type="hidden" name="order_date" value="{{Carbon\Carbon::now('Asia/Singapore')}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-default form-group-default-select2 required">
                                    <label>Car</label>
                                    <span class="help"></span>
                                    <select name="car_id" class="full-width" data-placeholder="Select Car!" data-init-plugin="select2" required>
                                        <option value=""></option>
                                        @foreach($cars as $car)
                                            <option value="{{$car->id}}" @if(old('car_id')=="$car->id") selected @endif>{{$car->name}} - Rp {{number_format($car->price,0,',','.')}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group form-group-default required">
                                    <label>Return Date</label>
                                    <span class="help"></span>
                                    <input type="text" name="return_date" class="form-control date" placeholder="Put Return Date!" value="{{old('return_date')}}" required>
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}" required>
                                </div>            
                            </div>
                        </div>
                        <h5 align="center">Payment DP</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-default required">
                                    <label>Amount</label>
                                    <span class="help"></span>
                                    <input type="number" name="amount" class="form-control gone" placeholder="Put Amount!" value="{{old('amount')}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-default required">
                                    <label>Date</label>
                                    <span class="help"></span>
                                    <input type="text" name="date" class="form-control date" placeholder="Put Date!" value="{{old('date')}}" required>
                                </div>            
                            </div>
                        </div>
                        <button class="btn btn-success btn-con">Save</button>
                        <a href="{{route('booking.index')}}" class="btn btn-default btn-con">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footer')
    <script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <script>
        $('.date').datepicker({
            autoclose: true,
            format: 'yyyy/mm/dd',
            orientation: 'top auto',
            todayBtn: 'linked',
            todayHighlight: true,
        });
    </script>
@endpush