@extends('layouts.app')

@section('page')
    Edit {{$oldclient->name}}
@endsection

@push('header')
    <link href="{{asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
@endpush

@section('header')
    <li class="breadcrumb-item">Asset</li>
    <li class="breadcrumb-item">Client</li>
    <li class="breadcrumb-item active">Edit - {{$oldclient->name}}</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <h5>Edit Client - {{$oldclient->name}}</h5>
            <div id="card-advance" class="card card-default">
                <div class="card-body">
                    <form action="{{route('client.update', $oldclient->id)}}" method="POST" autocomplete="off">
                    {{csrf_field()}}
                    @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-default required">
                                    <label>NIK</label>
                                    <span class="help"></span>
                                    <input type="number" name="nik" class="form-control gone" placeholder="Put NIK!" value="{{$oldclient->nik}}" required>
                                </div>
                                <div class="form-group form-group-default required">
                                    <label>Name</label>
                                    <span class="help"></span>
                                    <input type="text" name="name" class="form-control" placeholder="Put Name!" value="{{$oldclient->name}}" required>
                                </div>
                                <div class="form-group form-group-default form-group-default-select2">
                                    <label>Gender</label>
                                    <span class="help"></span>
                                    <select name="gender" class="full-width" data-placeholder="Select Gender!" data-init-plugin="select2">
                                        <option value=""></option>
                                        <option value="MALE" @if($oldclient->gender=="MALE") selected @endif>Male</option>
                                        <option value="FEMALE" @if($oldclient->gender=="FEMALE") selected @endif>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-default required">
                                    <label>Phone Number</label>
                                    <span class="help"></span>
                                    <input type="number" name="phone" class="form-control gone" placeholder="Put Phone Number!" value="{{$oldclient->phone}}" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Day of Birth</label>
                                    <span class="help"></span>
                                    <input type="text" name="dob" class="form-control date" placeholder="Put Day of Birth!" value="{{$oldclient->dob}}">
                                </div>            
                                <div class="form-group form-group-default required">
                                    <label>Address</label>
                                    <span class="help"></span>
                                    <textarea name="address" class="form-control" placeholder="Put Address!" required>{{$oldclient->address}}</textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success btn-con">Save</button>
                        <a href="{{route('client.index')}}" class="btn btn-default btn-con">Cancel</a>
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
            startView: 2,
        });
    </script>
@endpush