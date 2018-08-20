@extends('layouts.app')
@section('content')
    <h5>Add Car Brand</h5>
    <div class="row">
        <div class="col-md-6">
   
    <div id="card-advance" class="card card-default">
            
            <div class="card-body">
            <form action="{{ route('car_brand.store') }}" method="POST">
                @csrf
                @include('component.layouts.warning')
                            <div class="form-group">
                                <label>Name</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input name="name" type="text" class="form-control" required="">
                            </div>
                            <button class="btn btn-success btn-con" type="submit">Save</button>
                            <button class="btn btn-default btn-con" type="reset">Cancel</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection