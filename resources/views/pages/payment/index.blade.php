@extends('layouts.app')
@section('content')
    <h5>Data Payment</h5>
    <div id="card-advance" class="card card-default">
            
            <div class="card-body">
                <a href="{{route('payment.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                <thead>
                                    <tr>
                        
                                        <th style="width:10%">#</th>
                                        <th style="">Type</th>
                                        <th style="">Amount</th>
                                        <th style="">Date</th>
                                        <th style="">Client ID</th>
                                        <th style="">Employee ID</th>
                                        <th style="">Booking ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datas as $data)
                                        <tr class="c-table__row">
                                            <td class="c-table__cell">{{$data->id}}</td>
                                            <td class="c-table__cell">{{$data->type}}</td>
                                            <td class="c-table__cell">{{$data->amount}}</td>
                                            <td class="c-table__cell">{{$data->date}}</td>
                                            <td class="c-table__cell">{{$data->client_id}}</td>
                                            <td class="c-table__cell">{{$data->employee_id}}</td>
                                            <td class="c-table__cell">{{$data->booking_id}}</td>
                                        <td class="c-table__cell"><a href="{{route("payment.edit",['id' => $data->id])}}" class="c-btn c-btn--warning c-btn--small">Edit</a> <a class="c-btn c-btn--danger c-btn--small delete-btn" data-id="{{$data->id}}"  >Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
@endsection