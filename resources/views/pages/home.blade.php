@extends('layouts.app')

@section('page')
    Home
@endsection

@section('header')
    <li class="breadcrumb-item active">Home</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="widget-8 card no-border bg-success no-margin widget-loader-bar">
                <div class="container-xs-height full-height">
                    <div class="row-xs-height">
                        <div class="col-xs-height col-top">
                            <div class="card-header  top-left top-right">
                                <div class="card-title text-black hint-text">
                                    <span class="font-montserrat fs-11 all-caps">Car Owned <i class="fa fa-car"></i></span>
                                </div>
                                <div class="card-controls">
                                    <ul>
                                        <li>
                                            <a data-toggle="refresh" class="card-refresh text-black" href="#"><i class="card-icon card-icon-refresh"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-xs-height ">
                        <div class="col-xs-height col-top relative">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="p-l-20">
                                        <h3 class="no-margin p-b-5 text-white">{{$car}}  Car</h3>
                                        <p class="small hint-text m-t-5">
                                            @if($car>50)
                                            <span class="label  font-montserrat m-r-5">Enough</span>Need Again!
                                            @elseif($car>100)
                                            <span class="label  font-montserrat m-r-5">Good</span>Keep it!
                                            @else
                                            <span class="label  font-montserrat m-r-5">Still</span>Need More!
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget-8 card no-border bg-default no-margin widget-loader-bar">
                <div class="container-xs-height full-height">
                    <div class="row-xs-height">
                        <div class="col-xs-height col-top">
                            <div class="card-header  top-left top-right">
                                <div class="card-title text-black hint-text">
                                    <span class="font-montserrat fs-11 all-caps">car Owned <i class="fa fa-user"></i></span>
                                </div>
                                <div class="card-controls">
                                    <ul>
                                        <li>
                                            <a data-toggle="refresh" class="card-refresh text-black" href="#"><i class="card-icon card-icon-refresh"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-xs-height ">
                        <div class="col-xs-height col-top relative">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="p-l-20">
                                        <h3 class="no-margin p-b-5 text-black">{{$client}}  Client</h3>
                                        <p class="small hint-text m-t-5">
                                            @if($client>50)
                                            <span class="label  font-montserrat m-r-5">Enough</span>Need Again!
                                            @elseif($client>100)
                                            <span class="label  font-montserrat m-r-5">Good</span>Keep it!
                                            @else
                                            <span class="label  font-montserrat m-r-5">Still</span>Need More!
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget-8 card no-border bg-warning no-margin widget-loader-bar">
                <div class="container-xs-height full-height">
                    <div class="row-xs-height">
                        <div class="col-xs-height col-top">
                            <div class="card-header  top-left top-right">
                                <div class="card-title text-black hint-text">
                                    <span class="font-montserrat fs-11 all-caps">Booking Complete <i class="fa fa-book"></i></span>
                                </div>
                                <div class="card-controls">
                                    <ul>
                                        <li>
                                            <a data-toggle="refresh" class="card-refresh text-black" href="#"><i class="card-icon card-icon-refresh"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-xs-height ">
                        <div class="col-xs-height col-top relative">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="p-l-20">
                                        <h3 class="no-margin p-b-5 text-black">{{$bookingcomplete}} Booking</h3>
                                        <p class="small hint-text m-t-5">
                                            @if($bookingcomplete>50)
                                            <span class="label  font-montserrat m-r-5">Enough</span>Need Again!
                                            @elseif($bookingcomplete>100)
                                            <span class="label  font-montserrat m-r-5">Good</span>Hard Worked!
                                            @else
                                            <span class="label  font-montserrat m-r-5">Still</span>Need More!
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget-8 card no-border bg-danger no-margin widget-loader-bar">
                <div class="container-xs-height full-height">
                    <div class="row-xs-height">
                        <div class="col-xs-height col-top">
                            <div class="card-header  top-left top-right">
                                <div class="card-title text-black hint-text">
                                    <span class="font-montserrat fs-11 all-caps">Booking Uncomplete <i class="fa fa-book"></i></span>
                                </div>
                                <div class="card-controls">
                                    <ul>
                                        <li>
                                            <a data-toggle="refresh" class="card-refresh text-black" href="#"><i class="card-icon card-icon-refresh"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-xs-height ">
                        <div class="col-xs-height col-top relative">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="p-l-20">
                                        <h3 class="no-margin p-b-5 text-white">{{$bookinguncomplete}} Booking</h3>
                                        <p class="small hint-text m-t-5">
                                            @if($bookinguncomplete>50)
                                            <span class="label  font-montserrat m-r-5">Process</span>Solved Fast!
                                            @elseif($bookinguncomplete>100)
                                            <span class="label  font-montserrat m-r-5">Process</span>Don't Lazy!
                                            @else
                                            <span class="label  font-montserrat m-r-5">Good</span>Everything Solved!
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection