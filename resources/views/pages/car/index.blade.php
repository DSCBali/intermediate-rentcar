@extends('layouts.app')

@section('page')
    Car
@endsection

@push('header')
    <link href="{{asset('assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables-responsive/css/datatables.responsive.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/media/css/jquery.dataTables.css')}}">
    <script type="text/javascript">
        function deleteconfirm(id,name){
            if(confirm("Are you sure want to delete Car - "+name+"?")){
                event.preventDefault();
                document.getElementById('deleteform'+id).submit();
            }
        }
    </script>
@endpush

@section('header')
    <li class="breadcrumb-item">Asset</li>
    <li class="breadcrumb-item active">Car</li>
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
                <a href="{{route('car.create')}}" class="text-right pull-right btn btn-complete"><i class="fa fa-plus"></i> Create New</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="card-body">
            <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                <thead>
                    <tr>
                        <th style="width:5%">No</th>
                        <th>Name</th>
                        <th style="width:5%">Year</th>
                        <th style="width:8%">License</th>
                        <th style="width:15%">Price</th>
                        <th style="width:5%">Type</th>
                        <th>Brand</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>{{$loop->iteration}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$car->name}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$car->year}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$car->license_plat}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Rp {{number_format($car->price,0,',','.')}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$car->type}}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{$car->brand->name}}</p>
                            </td>
                            <td class="v-align-middle" align="center">
                                <p>
                                    <a href="{{route('car.edit', $car->id)}}" class="btn btn-warning">Edit</a>
                                    @if(count($car->booking)>0)
                                        <button class="btn btn-danger" onclick="return alert('You cannot delete this Car! Because it ever booked by the Client!');">Delete</button>
                                    @else
                                        <button class="btn btn-danger" onclick="deleteconfirm({{$car->id}},'{{$car->brand->name}} {{$car->name}}')">Delete</button>
                                        <form action="{{route('car.destroy', $car->id)}}" method="POST" id="deleteform{{$car->id}}">
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