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
                    Data transaksi
                    <a href="{{route('transaksi.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="transaksi">
                            <thead>
                            <tr>
                               <th>No</th>
                                    <th>Order</th>
                                    <th>Atas Nama</th>
                                    <th>Pesanan</th>
                                     <th>Qty</th>
                                    <th>Harga</th>
                                     <th>Uang Tunai</th>
                                     <th>Total</th>
                                    <th>Kembalian</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                     <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $no=1; @endphp
                            @foreach($transaksi as $data)
                             <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->orders->id }}</td>
                                        <td>{{ $data->customers->nama }}</td>
                                        <td>{{ $data->menus->nm_mnu }}</td>
                                         <td>{{ $data->jumlah }}</td>
                                          <td>{{ $data->harga }}</td>
                                           <td>{{ $data->uang }}</td>
                                           <td>{{ $data->total }}</td>
                                        <td>{{ $data->kembalian }}</td>
                                        <td>{{ $data->status }}</td>
                                         <td>{{ $data->tanggal }}</td>


                                        <td>
                                            <form action="{{ route('transaksi.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('transaksi.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('transaksi.show', $data->id) }}"
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
        $('#transaksi').DataTable();
    });
</script>
@endsection

