@extends('layouts.app')
@section('content')
    <h5>Data User</h5>
    <div id="card-advance" class="card card-default">
            
            <div class="card-body">
                <a href="{{route('client.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                <thead>
                                    <tr>
                        
                                        <th style="width:10%">#</th>
                                        <th style="">NIK</th>
                                        <th style="">Nama</th>
                                        <th style="">Tanggal Lahir</th>
                                        <th style="">Telp</th>
                                        <th style="">Alamat</th>
                                        <th style="">Jenis Kelamin</th>
                                        <th style="">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($datas as $data)
                                <tr>
                                    <td class="v-align-middle">{{$data->id}}</td>
                                    <td class="v-align-middle">{{$data->nik}}</td>
                                    <td class="v-align-middle">{{$data->name}}</td>
                                    <td class="v-align-middle">{{$data->dob}}</td>
                                    <td class="v-align-middle">{{$data->phone}}</td>
                                    <td class="v-align-middle">{{$data->address}}</td>
                                    <td class="v-align-middle">{{$data->gender}}</td>
                                    <td class="v-align-middle">
                                        <a class = "btn" href="{{route("client.edit",['id' => $data->id])}}" >Edit</a> 
                                        <a class = "del-btn btn" data-id="{{$data->id}}">Delete</a>
                                    </td>
                                </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
@endsection