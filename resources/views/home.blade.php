@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">
                                Dashboard
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

@section('header')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
    <!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div>
    <!--/.row-->
@endsection

@section('content')

    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-fw fa-book"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Data Masakan</span>
                    <span class="info-box-number">
                        <h3><b>{{ DB::table('menus')->count() }}</b></h3>
                    </span>
                    <span class="info-box-content">
                        <a href="{{ route('menu.index') }}" class="text-right">Lihat Detail</a>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-fw fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Data User</span>
                    <span class="info-box-number">
                        <h3><b>{{ DB::table('users')->count() }}</b></h3>
                    </span>
                    <span class="info-box-content">
                        <a href="{{ route('users.index') }}" class="text-right">Lihat Detail</a>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-fw fa-user"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Data Pelanggan</span>
                    <span class="info-box-number">
                        <h3><b>{{ DB::table('customers')->count() }}</b></h3>
                    </span>
                    <span class="info-box-content">
                        <a href="{{ route('customer.index') }}" class="text-right">Lihat Detail</a>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-fw fa-user"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Data Pelanggan</span>
                    <span class="info-box-number">
                        <h3><b>{{ DB::table('customers')->count() }}</b></h3>
                    </span>
                    <span class="info-box-content">
                        <a href="{{ route('customer.index') }}" class="text-right">Lihat Detail</a>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    </div>
@endsection

@stop

@section('css')

@stop
@section('js')
@stop
