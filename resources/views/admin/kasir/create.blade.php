@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@stop

@section('content')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah Data Kasir</div>
                    <div class="card-body">
                        <form action="{{ route('kasir.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama kasir</label>
                                <input type="text" name="nama" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jk" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">No Hp</label>
                                <input type="text" name="no_hp" class="form-control">

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



@stop
@section('css')
@stop
@section('js')
@stop
