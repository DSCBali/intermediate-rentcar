@extends('layouts.app')
@section('content')
    <h5>Edit {{$employee->name}}</h5>
    <div class="row">
        <div class="col-md-6">
//
    <div id="card-advance" class="card card-default">
            
            <div class="card-body">
            <form action="{{route('employee.update', ['id' => $employee->id])}}" method="POST">
                @method('PUT')
                @csrf
                @include('layout.warning')
                            <div class="form-group">
                                <label>Name</label>
                                <span class="help">e.g. "Mas Joko"</span>
                            <input type="text" class="form-control" required="" value="{{$employee->name}}" name="name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <span class="help">e.g. "Mas Joko"</span>
                            <input type="email" class="form-control" required="" value="{{$employee->email}}" name="email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <span class="help">e.g. "Mas Joko"</span>
                            <input type="password" class="form-control" required="" value="{{$employee->password}}" name="password">
                            </div>
                            <button class="btn btn-success btn-con" type="submit">Save</button>
                            <button class="btn btn-default btn-con" type="reset">Cancel</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection