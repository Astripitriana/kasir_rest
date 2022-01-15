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
                    <div class="card-header">Tambah Data kategori</div>
                    <div class="card-body">
                        <form action="{{ route('kategori.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama kategori</label>
                                <input type="text" name="nm_kategori" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control">

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
