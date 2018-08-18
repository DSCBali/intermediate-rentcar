@extends('layouts.app')

@section('page')
    Client
@endsection

@push('header')
    <link href="{{asset('assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables-responsive/css/datatables.responsive.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/media/css/jquery.dataTables.css')}}">
    <script type="text/javascript">
        function deleteconfirm(id,name){
            if(confirm("Are you sure want to delete Client - "+name+"?")){
                event.preventDefault();
                document.getElementById('deleteform'+id).submit();
            }
        }
    </script>
@endpush

@section('header')
    <li class="breadcrumb-item active">Client</li>
@endsection

@section('content')
    <h4>Client</h4>
    <div class="card card-transparent">
        <div class="card-header ">
            <div class="pull-left">
                <div class="col-xs-12">
                    <input type="text" id="search-table" class="form-control pull-left" placeholder="Search">
                </div>
            </div>
            <div class="pull-right">
                <a href="{{route('client.create')}}" class="text-right pull-right btn btn-complete"><i class="fa fa-plus"></i> Create New</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="card-body">
            <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                <thead>
                    <tr>
                        <th style="width:3%">No</th>
                        <th style="width:5%">NIK</th>
                        <th>Name</th>
                        <th style="width:18%">DOB</th>
                        <th style="width:10%">Phone</th>
                        <th style="width:20%">Address</th>
                        <th>Gender</th>
                        <th style="width:27%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>{{$loop->iteration}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$client->nik}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$client->name}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{date('d-M-Y', strtotime($client->dob))}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$client->phone}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$client->address}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$client->gender}}</p>
                            </td>
                            <td class="v-align-middle" align="center">
                                <p>
                                    <a href="{{route('client.edit', $client->id)}}" class="btn btn-warning">Edit</a>
                                    @if(count($client->booking)>0)
                                        <button class="btn btn-danger" onclick="return alert('You cannot delete this Client! Because he/she ever booked the Car!');">Delete</button>
                                    @else
                                        <button class="btn btn-danger" onclick="deleteconfirm({{$client->id}},'{{$client->name}}')">Delete</button>
                                        <form action="{{route('client.destroy', $client->id)}}" method="POST" id="deleteform{{$client->id}}">
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