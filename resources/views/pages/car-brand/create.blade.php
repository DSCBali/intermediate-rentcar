@extends('layouts.app')

@section('page')
    Create Car Brand
@endsection

@section('header')
    <li class="breadcrumb-item">Asset</li>
    <li class="breadcrumb-item">Car Brand</li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        <h5>Create Car Brand</h5>
            <div id="card-advance" class="card card-default">
                <div class="card-body">
                    <form action="{{route('car-brand.store')}}" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <span class="help"></span>
                            <input type="text" name="name" class="form-control" placeholder="Put Name!" required="" value="{{old('name')}}" autocomplete="off">
                        </div>
                        <button class="btn btn-success btn-con">Save</button>
                        <a href="{{route('car-brand.index')}}" class="btn btn-default btn-con">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection