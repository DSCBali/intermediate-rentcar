@extends('layouts.app')
@section('content')
    <h5>Data User</h5>
    <div id="card-advance" class="card card-default">
            
            <div class="card-body">
                <a href="{{route('brand.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                <thead>
                                    <tr>
                        
                                        <th style="width:10%">ID</th>
                                        <th style="">Merk</th>
                                        <th style="">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($datas as $data)
                                <tr>
                                    <td class="v-align-middle">{{$data->id}}</td>
                                    <td class="v-align-middle">{{$data->name}}</td>
                                    <td class="v-align-middle">
                                        <a class = "btn" href="{{route("brand.edit",['id' => $data->id])}}" >Edit</a> 
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
@push('scripts')
    <script>
        $(".del-btn").click(function(){
            let id = $(this).attr('data-id');
            if(confirm("Apa anda yakin akan menghapus? ")) {
                $.ajax({
                    url : "{{url('/')}}/brand/"+id,
                    method : "POST",
                    data : {
                        _token : "{{csrf_token()}}",
                        _method : "DELETE",
                    }
                })
                .then(function(data){
                    location.reload();
                });
            }
        })
    </script>
@endpush