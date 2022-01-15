@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@stop
@section('content')
  <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Edit transaksi</div>
                    <div class="card-body">
                        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">order_id</label>
                                <select name="order_id" class="form-control">
                                                  @foreach($order as $data)
                                                       <option value="{{$data->id}}" {{$data->id == $transaksi->order_id ? 'selected="selected"' : '' }}>{{$data->id}}</option>
                                                  @endforeach
                                            </select>
                            </div>
                            <div class="form-group">
                                <label for="">Atas Nama</label>
                                 <select name="customer_id" class="form-control">
                                                  @foreach($customer as $data)
                                                       <option value="{{$data->id}}" {{$data->id == $transaksi->customer_id ? 'selected="selected"' : '' }}>{{$data->nama}}</option>
                                                  @endforeach
                                            </select>
                                 </div>
                                 <div class="form-group">
                                <label for="">Pesanan</label>
                                 <select name="menu_id" class="form-control">
                                                  @foreach($menu as $data)
                                                       <option value="{{$data->id}}" {{$data->id == $transaksi->menu_id ? 'selected="selected"' : '' }}>{{$data->nm_mnu}}</option>
                                                  @endforeach
                                            </select>
                                 </div>

                                  <div class="form-group">
                                  <label for="">Jumlah</label>
                                 <input type="text" name="jumlah" value="{{ $transaksi->jumlah }}" class="form-control">
                                </div>

                                  <div class="form-group">
                                <label for="">Harga</label>
                                 <input type="text" name="harga" value="{{ $transaksi->harga }}" class="form-control">
                                 </div>
                                   <div class="form-group">
                                <label for="">Uang Tunai</label>
                                 <input type="text" name="uang" value="{{ $transaksi->uang }}" class="form-control">
                                 </div>
                                  <div class="form-group">
                                <label for="">Total Harga</label>
                                 <input type="text" name="total" value="{{ $transaksi->total }}" class="form-control">
                                 </div>

                                  <div class="form-group">
                                  <label for="">Kembalian</label>
                                 <input type="text" name="kembalian" value="{{ $transaksi->kembalian }}" class="form-control">
                                </div>
                                  <div class="form-group">
                                <label for="">Status</label>
                                 <input type="text" name="status" value="{{ $transaksi->status }}" class="form-control">
                                </div>
                                 <div class="form-group">
                                <label for="">Tanggal</label>
                                 <input type="date" name="tanggal" value="{{ $transaksi->tanggal }}" class="form-control">
                                </div>

                                {{-- <select name="author_id" class="form-control @error('author_id') is-invalis @enderror">
                                    <option value="">Pilih Penulis</option>
                                    @foreach ($author as $data)
                                        <option value="{{ $data->id }}"
                                        {{ $data->id == $book->author_id ? 'selected="selected"' : '' }}>
                                        {{$data->fullName()}}</option>
                                    @endforeach
                                </select>
                                @error('author_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}


                                {{-- <input type="number" name="amount"  value="{{ $book->amount }}"
                                    class="form-control @error('amount') is-invalid @enderror">
                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}

                            {{-- <div class="form-group">
                                <label for=""> Book</label>
                                <br>
                                <img src="{{ $book->image() }}" height="75" style="padding:10px;" />
                                <input type="file" name="cover" value="{{ $book->cover }}" class="form-control">
                            </div> --}}
                            <div class="form-group">
                                <br>
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css')
@stop
@section('js')
@stop


