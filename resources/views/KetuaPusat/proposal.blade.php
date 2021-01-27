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
                            <th>Status</th>
                            <th>Dibuat Pada Tanggal</th>

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
                                        @if ($row->donate == 1)
                                            <a href="/pusat_ketua/proposal/{{$row->id}}/donasi">
                                            <span class="badge badge-{{$row->donate == 0 ? "warning" : "success"}}">
                                                {{$row->donate == 0 ? "No" : "Yes"}}
                                            </span>
                                            </a>
                                        @else
                                            <span class="badge badge-{{$row->donate == 0 ? "warning" : "success"}}">
                                                {{$row->donate == 0 ? "No" : "Yes"}}
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        {{$row->status == 0 ? "Menunggu Konfirmasi" : ""}}
                                        {{$row->status == 1 ? "Di Konfirmasi" : ""}}
                                        {{$row->status == 2 ? "Di Tolak" : ""}}
                                    </td>
                                    <td>{{ Carbon\Carbon::parse($row->created_at)->format('d-m-Y') }}</td>
                                    <td class="text-right">
                                        <a href="proposal/detail/{{$row->id}}">
                                            <button type="button" class="btn btn-sm btn-info">
                                                <li class="fa fa-eye"></li>
                                            </button>
                                        </a>
                                        @if (!$row->status == 2 || !$row->status == 1)
                                        <button type="button" data-id="{{$row->id}}" data-status="{{$row->status}}" class="btn btn-sm btn-warning edit">
                                            <li class="fa fa-edit"></li>
                                        </button>
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

    <!-- Update Data Modal -->
    <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{$title}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        @csrf
                         <div class="form-group">
                            <label >Status</label> <br>
                            <select name="status" class="select2 form-control" style="width: 100%" id="status">
                                <option value="0" {{@$data['status'] == 0 ? 'selected':''}}>Menunggu Konfirmasi</option>
                                <option value="1" {{@$data['status'] == 1 ? 'selected':''}}>Di Konfirmasi</option>
                                <option value="2" {{@$data['status'] == 2 ? 'selected':''}}>Di Tolak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" cols="15" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
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
        $("#dtable").DataTable();

        $("#dtable .edit").on("click",function(){
            let params = $(this)
            let id = params.data("id")
            let status = params.data("status")
            $("#update").modal();

            $("#update").find(".modal-body input[status=status]").val(status)
            $("#update").find(".modal-body form").attr("action","{{route("pusat_ketua.proposal.update")}}/"+id)
            $("#update").find(".modal-title").text("Edit Data")
        })

        $(function () {
            $('.select2').select2()
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
        })
    </script>
@stop
