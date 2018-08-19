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
                                        @foreach($datas as $data)
                                        <tr class="c-table__row">
                                            <td class="c-table__cell">{{$data->id}}</td>
                                            <td class="c-table__cell">{{$data->booking_code}}</td>
                                            <td class="c-table__cell">{{$data->order_date}}</td>
                                            <td class="c-table__cell">{{$data->rental_date}}</td>
                                            <td class="c-table__cell">{{$data->return_date}}</td>
                                            <td class="c-table__cell">{{$data->price}}</td>
                                            <td class="c-table__cell">{{$data->status}}</td>
                                            <td class="c-table__cell">{{$data->fine}}</td>
                                            <td class="c-table__cell">{{$data->employees_id}}</td>
                                            <td class="c-table__cell">{{$data->car_id}}</td>
                                            <td class="c-table__cell">{{$data->client_id}}</td>
                                        <td class="c-table__cell"><a href="{{route("payment.edit",['id' => $data->id])}}" class="c-btn c-btn--warning c-btn--small">Edit</a> <a class="c-btn c-btn--danger c-btn--small delete-btn" data-id="{{$data->id}}"  >Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{-- <tr>
                                        <td class="v-align-middle semi-bold">
                                            <p>1</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>Mas Joko</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p>gmail@joko.com</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p>Nusa Penida</p>
                                        </td>
                                        <td class="v-align-middle"><a href="#" class="btn">Edit</a> <a href="#" class="btn">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="v-align-middle semi-bold">
                                            <p>2</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>Ko Marvel</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p>yahoo@marvel.com</p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p>Nusa Dua</p>
                                        </td>
                                        <td class="v-align-middle"><a href="#" class="btn">Edit</a> <a href="#" class="btn">Hapus</a>
                                        </td>
                                    </tr>
                                     --}}
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
@endsection