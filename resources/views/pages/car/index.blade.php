@extends('layouts.app')

@section('page')
    Car
@endsection

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
                <a href="{{route('car.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
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
                        <th style="width:5%">License</th>
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
                                <p><a href="#" class="btn">Edit</a> <a href="#" class="btn">Hapus</a></p>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection