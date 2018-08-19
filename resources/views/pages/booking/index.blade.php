@extends('layouts.app')

@section('page')
    Booking
@endsection

@push('header')
    <link href="{{asset('assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables-responsive/css/datatables.responsive.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/media/css/jquery.dataTables.css')}}">
    <script type="text/javascript">
        function deleteconfirm(id,name){
            if(confirm("Are you sure want to delete Booking - "+name+"?")){
                event.preventDefault();
                document.getElementById('deleteform'+id).submit();
            }
        }
    </script>
@endpush

@section('header')
    <li class="breadcrumb-item active">Booking</li>
@endsection

@section('content')
    <h4>Car</h4>
    <div class="card card-transparent">
        <div class="card-header ">
            <div class="pull-left">
                <div class="col-xs-12">
                    <input type="text" id="search-table" class="form-control pull-left" placeholder="Search">
                </div>
            </div>
            <div class="pull-right">
                <a href="{{route('booking.create')}}" class="text-right pull-right btn btn-complete"><i class="fa fa-plus"></i> Create New</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="card-body">
            <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                <thead>
                    <tr>
                        <th style="width:5%">No</th>
                        <th style="width:5%">Booking Code</th>
                        <th style="width:8%">Order Date</th>
                        <th style="width:8%">Rental Date</th>
                        <th style="width:8%">Return Date</th>
                        <th style="width:10%">Price</th>
                        <th>Status</th>
                        <th style="width:7%">Fine</th>
                        <th>Car</th>
                        <th>Client</th>
                        <th>Cashier</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>{{$loop->iteration}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$booking->booking_code}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{date('d-M-Y', strtotime($booking->order_date))}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{date('d-M-Y', strtotime($booking->rental_date))}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{date('d-M-Y', strtotime($booking->return_date))}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Rp {{number_format($booking->price,0,',','.')}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$booking->status}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Rp {{number_format($booking->fine,0,',','.')}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$booking->car->name}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$booking->client->name}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$booking->user->name}}</p>
                            </td>
                            <td class="v-align-middle" align="center">
                                <p>
                                    @if(count($booking->payment)==2)
                                        <a href="{{route('booking.edit', $booking->id)}}" class="btn btn-warning">Show Payment</a>
                                    @else
                                        <a href="{{route('booking.edit', $booking->id)}}" class="btn btn-warning">Edit</a>
                                        <button class="btn btn-danger" onclick="deleteconfirm({{$booking->id}},'{{$booking->client->name}}')">Delete</button>
                                        <form action="{{route('booking.destroy', $booking->id)}}" method="POST" id="deleteform{{$booking->id}}">
                                            {{csrf_field()}}
                                            @method("DELETE")
                                        </form>
                                    @endif
                                </p>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('footer')
    <script src="{{asset('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/datatables-responsive/js/datatables.responsive.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/datatables-responsive/js/lodash.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables.js')}}" type="text/javascript"></script>
@endpush