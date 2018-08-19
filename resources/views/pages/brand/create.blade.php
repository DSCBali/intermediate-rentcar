@extends('layouts.app')
@section('content')
    <h5>Tambah User</h5>
    <div class="row">
        <div class="col-md-6">

        
    <div id="card-advance" class="card card-default">
            
            <div class="card-body">
                    <form action="{{route('brand.store')}}" method="POST">
                    @csrf
                            <div class="form-group">
                                <label>Nama Merk</label>
                                <input name ="name" type="text" class="form-control" required="">
                            </div>

                            <button class="btn btn-success btn-con">Simpan</button>
                            <a class="btn btn-default btn-con" href="{{route("brand.index")}}">Batal</a>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection