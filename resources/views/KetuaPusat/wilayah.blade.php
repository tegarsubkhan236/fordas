@extends('adminlte::page')

@section('title', $title)

@section('content_header')

@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>{{$title}}</h3>
                        </div>
                        <div class="col-md-9">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-bordered table-hover table" id="dtable">
                            <thead class="thead-dark">
                            <th>No</th>
                            <th>Wilayah</th>
                            <th style="text-align:center;">Aksi</th>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $row)
                                <tr>
                                    <td>{{($key+1)}}</td>
                                    <td>{{$row->nama}}</td>
                                    <td style="text-align:center;">
                                        <a href="{{url("pusat_ketua/wilayah/detail/".$row->id."/".$row->nama)}}" class="btn btn-sm btn-info">
                                            <li class="fa fa-eye"></li>
                                        </a>
                                        {{-- <form action="{{ route('wilayah.delete', [$row->id]) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm delete-confirm" data-name="{{ $row->title }}" type="submit">
                                                <li class="fa fa-trash"></li>
                                            </button>
                                        </form> --}}
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

@section('footer')
    <strong>Copyright &copy; 2020 <a href="/">DAS Jawa Barat</a>.</strong> All rights reserved.
@stop

@section('css')

@stop

@section('js')
    @include('msg');
    <script>
        $("#dtable").DataTable({
        });

        $("#dtable .edit").on("click",function(){
            let params = $(this)
            let id = params.data("id")
            let nama = params.data("nama")
            $("#update").modal();

            $("#update").find(".modal-body input[name=nama]").val(nama)
            $("#update").find(".modal-body form").attr("action","{{route("wilayah.update")}}/"+id)
            $("#update").find(".modal-title").text("Edit Data")
        })
    </script>
@stop
