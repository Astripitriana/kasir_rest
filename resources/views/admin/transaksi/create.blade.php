@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah Data Transaksi</div>
                    <div class="card-body">
                        <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">order_id</label>
                             <select name="order_id" class="form-control">
                               @foreach($order as $data)
                               <option value="{{$data->id}}">{{$data->id}}</option>
                               @endforeach
                           </select>

                            </div>
                             <div class="form-group">
                                <label for="">Atas Nama</label>
                                <select name="customer_id" class="form-control">
                               @foreach($customer as $data)
                               <option value="{{$data->id}}">{{$data->nama}}</option>
                               @endforeach
                           </select>
                            <div class="form-group">
                                <label for="">Pesanan</label>
                                <select name="menu_id" class="form-control">
                               @foreach($menu as $data)
                               <option value="{{$data->id}}">{{$data->nm_mnu}}</option>
                               @endforeach
                           </select>

                            </div>
                             <div class="form-group">
                                <label for="">Jumlah</label>
                                <input type="text" name="jumlah" class="form-control">

                            </div>
                              <div class="form-group">
                                <label for="">Harga</label>
                                <input type="text" name="harga" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Uang Tunai</label>
                                <input type="text" name="uang" class="form-control">

                            </div>
                              {{-- <div class="form-group">
                                <label for="">Total</label>
                                <input type="text" name="total" class="form-control">

                            </div> --}}

                             {{-- <div class="form-group">
                                <label for="">Kembalian</label>
                                <input type="text" name="kembalian" class="form-control">

                            </div> --}}
                             <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" name="status" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control">

                            </div>

                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('css')
@endsection
@section('js')
@endsection
