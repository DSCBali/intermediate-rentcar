@extends('layouts.app')

@section('page')
    Edit {{$oldcarbrand->name}}
@endsection

@section('header')
    <li class="breadcrumb-item">Asset</li>
    <li class="breadcrumb-item">Car Brand</li>
    <li class="breadcrumb-item active">Edit - {{$oldcarbrand->name}}</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        <h5>Edit Car Brand - {{$oldcarbrand->name}}</h5>
            <div id="card-advance" class="card card-default">
                <div class="card-body">
                    <form action="{{route('car-brand.update', $oldcarbrand->id)}}" method="POST">
                    {{csrf_field()}}
                    @method('PUT')
                        <div class="form-group form-group-default required">
                            <label>Name</label>
                            <span class="help"></span>
                            <input type="text" name="name" class="form-control" placeholder="Put Name!" value="{{$oldcarbrand->name}}" autocomplete="off" required>
                        </div>
                        <button class="btn btn-success btn-con">Save</button>
                        <a href="{{route('car-brand.index')}}" class="btn btn-default btn-con">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection