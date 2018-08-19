@extends('layouts.app')
@section('content')
    <h5>Add Car</h5>
    <div class="row">
        <div class="col-md-6">

        
    <div id="card-advance" class="card card-default">
            
            <div class="card-body">
            <form action="{{ route('car.store') }}" method="POST">
                @csrf
                    @include('layout.warning')
                            <div class="form-group">
                                <label>Name</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" name="name" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>License Plat</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" name="license_plat" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="number" name="price" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <select class="form-control" name="type" required="">
                                    <option>Matic</option>
                                    <option>Manual</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Brand</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <select class="form-control" name="brand_id">
                                    @foreach($datas as $data)
                                        <option value="{{$data->id}}">
                                            {{$data->name}}
                                        </option>
                                    @endforeach 
                                </select>
                            </div>
                            
                            <button class="btn btn-success btn-con" type="submit">Save</button>
                            <button class="btn btn-default btn-con" type="reset">Cancel</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection