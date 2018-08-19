@extends('layouts.app')
@section('content')
    <h5>Tambah User</h5>
    <div class="row">
        <div class="col-md-6">

        
    <div id="card-advance" class="card card-default">
            
            <div class="card-body">
                <form action="{{route('user.update',['id' => $user->id])}}" class="form-control" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="form-group">
                                <label>Nama</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" class="form-control" name="name" required=""value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="email" class="form-control" name="password" required="" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" class="form-control" name="address" required="" value="{{$user->address}}">
                            </div>

                            <button class="btn btn-success btn-con">Simpan</button>
                            <a class="btn btn-default btn-con" href="{{route("user.index")}}">Batal</a>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection