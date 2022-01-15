@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')

@section('content')
 @include('layouts._flash')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data order
                    <a href="{{route('order.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="order">
                            <thead>
                            <tr>
                               <th>No</th>
                                    <th>Menu_id</th>
                                    <th>Customer_id</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Qty</th>
                                     <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $no=1; @endphp
                            @foreach($order as $data)
                             <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->menus->nm_mnu }}</td>
                                        <td>{{ $data->customer_id }}</td>
                                        <td>{{ $data->tanggal }}</td>
                                        <td>{{ $data->status }}</td>
                                         <td>{{ $data->jumlah }}</td>

                                        <td>
                                            <form action="{{ route('order.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('order.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('order.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
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
        $('#order').DataTable();
    });
</script>
@endsection

