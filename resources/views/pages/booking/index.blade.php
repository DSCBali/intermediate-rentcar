@extends('layouts.app')
@section('content')
    <h5>Data Booking</h5>
    <div id="card-advance" class="card card-default">
            
            <div class="card-body">
                <a href="{{route('booking.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                <thead>
                                    <tr>
                                        <th style="width:10%">#</th>
                                        <th style="">Booking Code</th>
                                        <th style="">Order Date</th>
                                        <th style="">Rental Date</th>
                                        <th style="">Return Date</th>
                                        <th style="">Price</th>
                                        <th style="">Status</th>
                                        <th style="">Fine</th>
                                        <th style="">Employee ID</th>
                                        <th style="">Car ID</th>
                                        <th style="">Client ID</th>
                                        <th style="">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($cars as $car)
                                        <tr class="c-table__row">
                                            <td class="c-table__cell">{{$car->id}}</td>
                                            <td class="c-table__cell">{{$car->booking_code}}</td>
                                            <td class="c-table__cell">{{$car->order_date}}</td>
                                            <td class="c-table__cell">{{$car->rental_date}}</td>
                                            <td class="c-table__cell">{{$car->return_date}}</td>
                                            <td class="c-table__cell">{{$car->price}}</td>
                                            <td class="c-table__cell">{{$car->status}}</td>
                                            <td class="c-table__cell">{{$car->fine}}</td>
                                            <td class="c-table__cell">{{$car->employees_id}}</td>
                                            <td class="c-table__cell">{{$car->car_id}}</td>
                                            <td class="c-table__cell">{{$car->client_id}}</td>
                                        <td class="c-table__cell"><a href="{{route("booking.edit",['id' => $booking->id])}}" class="c-btn c-btn--warning c-btn--small">Edit</a> <a class="c-btn c-btn--danger c-btn--small delete-btn" data-id="{{$car->id}}"  >Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
@endsection