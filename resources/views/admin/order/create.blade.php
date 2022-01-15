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
                    <div class="card-header">Tambah Data Order</div>
                    <div class="card-body">
                        <form action="{{ route('order.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Menu_id</label>
                             <select name="menu_id" class="form-control">
                               @foreach($menu as $data)
                               <option value="{{$data->id}}">{{$data->nm_mnu}}</option>
                               @endforeach
                           </select>

                            </div>
                             <div class="form-group">
                                <label for="">Customer_id</label>
                                <input type="text" name="customer_id" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" name="status" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Jumlah</label>
                                <input type="text" name="jumlah" class="form-control">

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
