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
                        <div class="col-md-6">
                            <h3>{{$title}}</h3>
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
                                    <td>{{$row->status}}</td>
                                    <td>{{$row->updated_at()}}</td>
                                    <td class="text-right">
                                        <a href="proposal/detail/{{$row->id}}">
                                            <button type="button" class="btn btn-sm btn-info">
                                                <li class="fa fa-eye"></li>
                                            </button>
                                        </a>
                                        <button type="button" data-id="{{$row->id}}" data-status="{{$row->status}}" data-judul="{{$row->judul}}" class="btn btn-sm btn-warning edit">
                                            <li class="fa fa-edit"></li>
                                        </button>
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
                        <h5>Judul</h5>
                        <div class="input-group">
                            <textarea name="judul" cols="40" rows="5" class="form-control" readonly></textarea>
                        </div>
                        <br><h5>Status</h5>
                        <div class="input-group">
                            <select name="status" class="form-control">
                                <option value="9">Di Tolak</option>
                                <option value="1">Konfirmasi Ketua Wilayah</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
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
        $("#dtable").DataTable({
        });

        $("#dtable .edit").on("click",function(){
            let params = $(this)
            let id = params.data("id")
            let status = params.data("status")
            let judul = params.data("judul")
            $("#update").modal();

            $("#update").find(".modal-body input[name=status]").val(status)
            $("#update").find(".modal-body textarea[name=judul]").val(judul)
            $("#update").find(".modal-body form").attr("action","{{route("proposal.update")}}/"+id)
            $("#update").find(".modal-title").text("Edit Data")
        })
    </script>
@stop
