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
                <div class="card-header">
                    Data feedback
                    <a href="{{route('feedback.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="feedback">
                            <thead>
                            <tr>
                               <th>No</th>

                                    <th>Isi</th>
                                    <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $no=1; @endphp
                            @foreach($feedback as $data)
                             <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->isi}}</td>

                                        <td>
                                            <form action="{{ route('feedback.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf

                                                <a href="{{ route('feedback.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Are you sure?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset ('DataTables/datatables.min.css')}}">
@endsection

@section('js')
<script src="{{ asset ('DataTables/datatables.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#feedback').DataTable();
    });
</script>
@endsection

