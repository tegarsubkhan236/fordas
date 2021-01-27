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
                            <th>Title</th>
                            <th>Type</th>
                            <th class="text-center">Visibility</th>
                            <th class="text-center">Donasi</th>
                            <th class="text-center">Aktifitas</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Updated At</th>

                            <th class="text-right">action</th>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $row)
                                <tr>
                                    <td>{{$row->judul}}</td>
                                    <td>{{$row->proposal_kategori->nama}}</td>
                                    <td class="text-center">
                                        <span class="badge badge-{{$row->visibility == 0 ? "warning" : "success"}}">
                                            {{$row->visibility == 0 ? "No" : "Yes"}}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="/wilayah_sekre/proposal/donasi/{{$row->id}}/detail">
                                        <span class="badge badge-{{$row->donate == 0 ? "warning" : "success"}}">
                                            {{$row->donate == 0 ? "No" : "Yes"}}
                                        </span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="/wilayah_sekre/proposal/aktifitas/{{$row->id}}/detail">
                                            <span class="badge badge-info">
                                                aktifitas
                                            </span>
                                        </a>
                                    </td>
                                    <td>
                                         <span class="badge badge-{{$row->status == 0 ? "warning" : ""}}">
                                            {{$row->status == 0 ? "Menunggu Konfirmasi" : ""}}
                                        </span>
                                         <span class="badge badge-{{$row->status == 1 ? "success" : ""}}">
                                            {{$row->status == 1 ? "Di Konfirmasi" : ""}}
                                        </span>
                                         <span class="badge badge-{{$row->status == 2 ? "danger" : ""}}">
                                            {{$row->status == 2 ? "Di Tolak" : ""}}
                                        </span>
                                    </td>
                                    <td>{{$row->keterangan}}</td>
                                    <td>{{ Carbon\Carbon::parse($row->updated_at)->format('d-m-Y') }}</td>
                                    <td class="text-right">
                                        <span>
                                        <a href="proposal/detail/{{$row->id}}">
                                            <button type="button" class="btn btn-sm btn-info">
                                                <li class="fa fa-eye"></li>
                                            </button>
                                        </a>
                                        @if ($row->status == 0 || $row->status == 2)
                                        <a href="proposal/edit/{{$row->id}}">
                                            <button type="button" class="btn btn-sm btn-warning">
                                                <li class="fa fa-edit"></li>
                                            </button>
                                        </a>
                                        @endif
                                        @if ($row->status == 1)
                                        <a href="proposal/aktifitas/{{$row->id}}">
                                            <button type="button" class="btn btn-sm btn-warning">
                                                <li class="fa fa-plus"></li>
                                            </button>
                                        </a>
                                        @endif
                                        </span>
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
