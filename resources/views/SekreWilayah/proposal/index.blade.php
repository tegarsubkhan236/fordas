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
                            <a href="proposal/create">
                            <button type="button" class="btn btn-success float-right">
                                Tambah
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-bordered table-hover table" id="dtable">
                            <thead class="thead-dark">
                            <th>Id</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th class="text-center">Visibility</th>
                            <th class="text-center">Can Donate</th>
                            <th>Status</th>
                            <th>Updated At</th>

                            <th class="text-right">action</th>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $row)
                                <tr>
                                    <td>{{($key+1)}}</td>
                                    <td>{{$row->judul}}</td>
                                    <td>{{$row->proposal_kategori->nama}}</td>
                                    <td class="text-center">
                                        <span class="badge badge-{{$row->visibility == 0 ? "warning" : "success"}}">
                                            {{$row->visibility == 0 ? "No" : "Yes"}}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-{{$row->donate == 0 ? "warning" : "success"}}">
                                            {{$row->donate == 0 ? "No" : "Yes"}}
                                        </span>
                                    </td>
                                    <td>{{$row->status == 0 ? "Menunggu Konfirmasi" : ""}}</td>
                                    <td>{{$row->updated_at}}</td>
                                    <td class="text-right">
                                        <a href="proposal/detail/{{$row->id}}">
                                            <button type="button" class="btn btn-sm btn-info">
                                                <li class="fa fa-eye"></li>
                                            </button>
                                        </a>
                                        <a href="proposal/edit/{{$row->id}}">
                                            <button type="button" class="btn btn-sm btn-warning">
                                                <li class="fa fa-edit"></li>
                                            </button>
                                        </a>
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

        // $("#dtable .edit").on("click",function(){
        //     let params = $(this)
        //     let id = params.data("id")
        //     let nama = params.data("nama")
        //     $("#update").modal();

        //     $("#update").find(".modal-body input[name=nama]").val(nama)
        //     $("#update").find(".modal-body form").attr("action","{{route("wilayah.update")}}/"+id)
        //     $("#update").find(".modal-title").text("Edit Data")
        // })
    </script>
@stop
