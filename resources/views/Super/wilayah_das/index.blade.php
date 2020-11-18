@extends('adminlte::page')

@section('title', $title)

@section('content_header')

@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-bordered table-hover table" id="dtable">
                            <thead class="thead-dark">
                            <th>ID</th>
                            <th>Wilayah</th>
                            <th>DAS</th>
                            <th>Created At</th>
                            <th>updated At</th>
                            <th style="text-align:center;">Aksi</th>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $row)
                                <tr>
                                    <td>{{($key+1)}}</td>
                                    <td>{{$row->wilayah->nama}}</td>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>{{$row->updated_at}}</td>
                                    <td style="text-align:center;">
                                        <a href="{{route("wilayah.edit",[$row->id])}}" class="btn btn-sm btn-warning">
                                            <li class="fa fa-eye"></li>
                                        </a>
                                        <form action="{{ route('wilayah.delete', [$row->id]) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm delete-confirm" data-name="{{ $row->title }}" type="submit">
                                                <li class="fa fa-ban"></li>
                                            </button>
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
@stop

@section('css')

@stop

@section('js')
    @include('msg');
    <script>
        $("#dtable").DataTable({
        });
    </script>
@stop
