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
                    <div class="card-header">Data Order</div>
                    <div class="card-body">
                            <div class="form-group">
                                <label for="">Menu_id</label>
                                <input type="text" name="menu_id" value="{{ $order->menu_id }}" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Customer_id</label>
                                <input type="text" name="customer_id" class="form-control" value="{{ $order->customer_id}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="text" name="tanggal" value="{{ $order->tanggal }}" class="form-control" disabled>
                            </div>
                             <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" name="status" value="{{ $order->status }}" class="form-control" disabled>
                            </div>
                             <div class="form-group">
                                <label for="">Jumlah</label>
                                <input type="text" name="jumlah" value="{{ $order->jumlah }}" class="form-control" disabled>
                            </div>
                            {{-- <div class="form-group">
                                <label for=""> Book Cover</label>
                                <br>
                                <img src="{{ $book->image() }}" style="width:350px; height:350px; padding:10px;" />
                            </div> --}}
                            <div class="form-group">
                                <br>
                                <a href="{{ url('admin/order') }}" class="btn btn-block btn-outline-primary">Kembali</a>
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
