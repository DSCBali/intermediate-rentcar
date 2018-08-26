@extends('layouts.app')

@section('page')
    Profile {{Auth::user()->name}}
@endsection

@section('header')
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Profile - {{Auth::user()->name}}</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <h5>Profile - {{Auth::user()->name}}</h5>
            <div id="card-advance" class="card card-default">
                <div class="card-body">
                    <form action="{{route('profile.update', Auth::user()->id)}}" method="POST" autocomplete="off">
                    {{csrf_field()}}
                    @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-default">
                                    <label>Name</label>
                                    <span class="help"></span>
                                    <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-default">
                                    <label>E-Mail</label>
                                    <span class="help"></span>
                                    <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-warning btn-con">Edit</button>
                        <a href="{{route('home')}}" class="btn btn-default btn-con">Back to Home</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection