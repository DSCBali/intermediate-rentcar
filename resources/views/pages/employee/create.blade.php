@extends('layouts.app')
@section('content')
    <h5>Add Employee</h5>
    <div class="row">
        <div class="col-md-6">

        
    <div id="card-advance" class="card card-default">
            
            <div class="card-body">
            <form action="{{ route('employee.store')}}" method="POST">
                @csrf
                @include('component.layouts.warning')
                            <div class="form-group">
                                <label>Name</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" class="form-control" required="" name="name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="email" class="form-control" required="" name="email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="password" class="form-control" required="" name="password">
                            </div>
                            <button class="btn btn-success btn-con" type="submit">Save</button>
                            <button class="btn btn-default btn-con" type="reset">Cancel</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection