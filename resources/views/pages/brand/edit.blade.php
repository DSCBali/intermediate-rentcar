@extends('layouts.app')
@section('content')
    <h5>Tambah User</h5>
    <div class="row">
        <div class="col-md-6">

        
    <div id="card-advance" class="card card-default">
            
            <div class="card-body">
                <form action="{{route('brand.update',['id' => $brand->id])}}" class="form-control" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="form-group">
                                <label>Nama Merk</label>
                                <input name ="name" type="text" class="form-control" required="" value="{{$brand->name}}">
                            </div>

                            <button class="btn btn-success btn-con" type="submit">Simpan</button>
                            <a class="btn btn-default btn-con" href="{{route("brand.index")}}">Batal</a>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection