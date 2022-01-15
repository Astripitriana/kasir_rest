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
                    <div class="card-header">Edit Menu</div>
                    <div class="card-body">
                        <form action="{{ route('menu.update', $menu->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Nama menu</label>
                                <input type="text" name="nm_mnu" value="{{ $menu->nm_mnu }}" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="">Gambar Masakan</label>
                                 <img src="{{ $menu->image() }}" height="75" style="padding:10px;" />
                                 <input type="file" name="gambar_masakan" value="{{ $menu->gambar_masakan }}" class="form-control">
                                 </div>
                                  <div class="form-group">
                                <label for="">Kategori</label>
                                 <input type="text" name="kategori" value="{{ $menu->kategori }}" class="form-control">
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

                            <div class="form-group">
                                <label for="">Harga</label>
                                 <input type="text" name="harga" value="{{ $menu->harga }}" class="form-control">
                                  <div class="form-group">
                                <label for="">Status</label>
                                 <input type="text" name="status" value="{{ $menu->status }}" class="form-control">
                                {{-- <input type="number" name="amount"  value="{{ $book->amount }}"
                                    class="form-control @error('amount') is-invalid @enderror">
                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
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


@endsection

@section('css')

@endsection
@section('js')
@endsection
