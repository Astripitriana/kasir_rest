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
                    <div class="card-header">Tambah Data customer</div>
                    <div class="card-body">
                        <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                             <div class="form-group">
                                <label for="">nama</label>
                                <input type="text" name="nama" class="form-control">

                            </div>
                             <div class="form-group">
                                <label for="">no_meja</label>
                                <input type="text" name="no_meja" class="form-control">




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
