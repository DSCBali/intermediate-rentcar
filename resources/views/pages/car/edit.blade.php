@extends('layouts.app')
@section('content')
    <h5>Tambah User</h5>
    <div class="row">
        <div class="col-md-6">

        
    <div id="card-advance" class="card card-default">
            
            <div class="card-body">
                    <form action="{{route('car.update',['id' => $car->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                                <label>Name</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" name="name" class="form-control" required="" value="{{$car->name}}">
                            </div>
                            <div class="form-group">
                                <label>License Plat</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" name="license_plate" class="form-control" required="" value="{{$car->license_plate}}">
                            </div>
                            <div class="form-group">
                                <label>Tahun</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" name="year" class="form-control" required=""value="{{$car->year}}">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="number" name="price" class="form-control" required="" value="{{$car->price}}">
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <select class="form-control" name="type" required="" value="{{$car->type}}">
                                    <option>Matic</option>
                                    <option>Manual</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>brand</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <select class="form-control" name="brand_id">
                                    @foreach($datas as $data)
                                        <option value="{{$data->id}}">
                                            {{$data->name}}
                                        </option>
                                    @endforeach 
                                </select>
                            </div>
                            <button class="btn btn-success btn-con">Simpan</button>
                            <a class="btn btn-default btn-con" href="{{route('car.index')}}">Batal</a>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection