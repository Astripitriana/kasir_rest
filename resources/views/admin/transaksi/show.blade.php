@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Data Transaksi</div>
                    <div class="card-body">
                            <div class="form-group">
                                <label for="">order_id</label>
                                <input type="text" name="order_id" value="{{ $transaksi->order_id }}" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Customer_id</label>
                                <input type="text" name="customer_id" class="form-control" value="{{ $transaksi->customer_id}}" disabled>
                            </div>
                             <div class="form-group">
                                <label for="">Jumlah</label>
                                <input type="text" name="jumlah" value="{{ $transaksi->jumlah }}" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="text" name="harga" value="{{ $transaksi->harga }}" class="form-control" disabled>
                            </div>
                             <div class="form-group">
                                <label for="">Uang Tunai</label>
                                <input type="text" name="uang" value="{{ $transaksi->uang }}" class="form-control" disabled>
                            </div>
                             <div class="form-group">
                                <label for="">Total</label>
                                <input type="text" name="total" value="{{ $transaksi->total }}" class="form-control" disabled>
                            </div>
                             <div class="form-group">
                                <label for="">Kembalian</label>
                                <input type="text" name="kembalian" value="{{ $transaksi->kembalian }}" class="form-control" disabled>
                            </div>
                             <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" name="status" value="{{ $transaksi->status }}" class="form-control" disabled>
                            </div>
                             <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal" value="{{ $transaksi->tanggal }}" class="form-control" disabled>
                            </div>

                            {{-- <div class="form-group">
                                <label for=""> Book Cover</label>
                                <br>
                                <img src="{{ $book->image() }}" style="width:350px; height:350px; padding:10px;" />
                            </div> --}}
                            <div class="form-group">
                                <br>
                                <a href="{{ url('admin/transaksi') }}" class="btn btn-block btn-outline-primary">Kembali</a>
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
