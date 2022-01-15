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
                    <div class="card-header">Tambah Data Menu</div>
                    <div class="card-body">
                        <form action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Masakan</label>
                                <input type="text" name="nm_mnu" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Gambar Masakan</label>
                                <input type="file" name="gambar_masakan" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Kategori</label>
                                <input type="text" name="kategori" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Harga</label>
                                <input type="text" name="harga" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" name="status" class="form-control">

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
