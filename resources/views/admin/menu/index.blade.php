@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection
@section('content')


<div class="d-flex justify-content-center">
</div></div>
 @include('layouts._flash')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{-- Data Kasir --}}
                    <a href="{{route('menu.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="menu">
                            <thead>
                            <tr>
                                    <th>No</th>
                                    <th>Nama Masakan</th>
                                    <th>Gambar Masakan</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                     <th>Status</th>
                                    <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $no=1; @endphp
                            @foreach($menu as $data)
                             <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nm_mnu }}</td>
                                        <td><img src="{{$data->image()}}" alt="" style="width:150px; height:150px;" alt="Gambar_masakan"></td>
                                        <td>{{ $data->kategori }}</td>
                                        <td>{{ $data->harga }}</td>
                                        <td>{{ $data->status }}</td>


                                        <td>
                                            <form action="{{ route('menu.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('menu.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>

                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Are you sure?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset ('DataTables/datatables.min.css')}}">
@endsection

@section('js')
<script src="{{ asset ('DataTables/datatables.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#menu').DataTable();
    });
</script>
@endsection
