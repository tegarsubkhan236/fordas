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
                            <th>ID</th>
                            <th>Dibuat Oleh</th>
                            <th>Judul</th>
                            <th>Tipe Proposal</th>
                            <th class="text-center">Visibility</th>
                            <th class="text-center">Donasi</th>
                            <th>Jumlah Donasi</th>
                            <th>Jumlah Donatur</th>
                            <th>Aktifitas</th>
                            <th>Status</th>
                            <th>Di Update pada tanggal</th>
                            <th class="text-right">action</th>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->wilayah_da->nama}}</td>
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
                                    <td>Rp. {{ number_format($row->donasis->sum('total_donasi')) }}</td>
                                    <td>{{ $row->donasis->count() != null ? $row->donasis->count():""}}</td>
                                    <td>
                                        @if ($row->proposal_details->sum('id') > 0)
                                        <a href="/pusat_sekre/proposal/aktifitas/{{$row->id}}/detail">
                                            <button type="button" class="btn btn-sm btn-{{ $row->proposal_details->avg('status') > 0.5 ? "success":"danger"}}">
                                                <li class="fa fa-eye"></li>
                                            </button>
                                        </a>
                                        @endif
                                    </td>
                                    <td>
                                        {{$row->status == 0 ? "Menunggu Konfirmasi" : ""}}
                                        {{$row->status == 1 ? "Di Konfirmasi" : ""}}
                                        {{$row->status == 2 ? "Di Tolak" : ""}}
                                    </td>
                                    <td>{{ Carbon\Carbon::parse($row->updated_at)->format('d-m-Y') }}</td>
                                    <td class="text-right">
                                        <a href="proposal/detail/{{$row->id}}">
                                            <button type="button" class="btn btn-sm btn-info">
                                                <li class="fa fa-eye"></li>
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
            "order": [[ 0, "desc" ]]
        });
        $("#dtable .edit").on("click",function(){
            let params = $(this)
            let status = params.data("status")
            $("#update").modal();

            $("#update").find(".modal-body input[name=status]").val(status)
            $("#update").find(".modal-body form").attr("action","{{route("pusat_sekre.kategori.update")}}/"+id)
            $("#update").find(".modal-title").text("Edit Data")
        })
    </script>
@stop
