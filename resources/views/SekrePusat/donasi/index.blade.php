@extends('adminlte::page')

@section('title', 'Donasi')

@section('content_header')

@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Donasi</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-bordered table-hover table" id="dtable">
                            <thead class="thead-dark">
                            <th>Id</th>
                            <th>Donator</th>
                            <th>Judul Proposal</th>
                            <th>DAS Dituju</th>
                            <th>Detail Donatur</th>
                            {{-- <th>Detail Proposal</th> --}}
                            <th>Bukti Transfer</th>
                            <th>Status</th>
                            <th style="text-align:center;">Action</th>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $row)
                                <tr>
                                    <td>{{($key+1)}}</td>
                                    <td>{{$row->detail_donatur->name}}</td>
                                    <td>{{$row->proposal->judul}}</td>
                                    <td>{{$row->proposal->wilayah_da->nama}}</td>
                                    <td>
                                        <a href="donasi/detail/{{$row->id}}">
                                            <button type="button" class="btn btn-sm btn-info">
                                                <li class="fa fa-eye"></li>
                                            </button>
                                        </a>
                                    </td>
                                    {{-- <td>
                                        <a href="proposal/detail/{{$row->id}}">
                                            <button type="button" class="btn btn-sm btn-info">
                                                <li class="fa fa-eye"></li>
                                            </button>
                                        </a>
                                    </td> --}}
                                    <td><img src="{{url('public/storage/'.$row->bukti_transfer)}}" class="img-fluid"></td>
                                    <td>
                                        <span class="badge badge-{{$row->status == 0 ? "warning" : ""}}">
                                            {{$row->status == 0 ? "Menunggu Pembayaran" : ""}}
                                        </span>
                                        <span class="badge badge-{{$row->status == 1 ? "info" : ""}}">
                                            {{$row->status == 1 ? "Menunggu Dikonfirmasi" : ""}}
                                        </span>
                                        <span class="badge badge-{{$row->status == 2 ? "success" : ""}}">
                                            {{$row->status == 2 ? "Di Konfirmasi" : ""}}
                                        </span>
                                    </td>
                                    <td style="text-align:center;">
                                        @if ($row->status == 1)
                                            <a href="donasi/edit/{{$row->id}}">
                                            <button type="button" class="btn btn-sm btn-warning edit">
                                                <li class="fa fa-edit"></li>
                                            </button>
                                            </a>
                                        @endif
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
    </script>
@stop
