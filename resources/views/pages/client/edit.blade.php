@extends('layouts.app')
@section('content')
    <h5>Tambah User</h5>
    <div class="row">
        <div class="col-md-6">

        
    <div id="card-advance" class="card card-default">
            
            <div class="card-body">
                <form action="{{route('client.update',['id' => $client->id])}}" class="form-control" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="form-group">
                                <label>NIK</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" name="nik" class="form-control" required="" value="{{$client->nik}}">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" name="name" class="form-control" required="" value="{{$client->name}}">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="date" name="dob" class="form-control" required="" value="{{$client->dob}}">
                            </div>
                            <div class="form-group">
                                <label>No Telp</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" name="phone" class="form-control" required="" value="{{$client->phone}}">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" name="address" class="form-control" required="" value="{{$client->address}}">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <span class="help">e.g. "Mas Joko"<br></span>
                                    <input type="radio" name="gender" value="Laki-laki"> Laki-laki
                                    <input type="radio" name="gender" value="Perempuan"> Perempuan
                                    <input type="radio" name="gender" value="Lainnya"> Lainnya
                            </div>
                            <button class="btn btn-success btn-con">Simpan</button>
                            <a class="btn btn-default btn-con" href="{{route("client.index")}}">Batal</a>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection