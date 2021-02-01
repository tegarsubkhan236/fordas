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
                            <h3>Aktifitas</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-bordered table-hover table" id="dtable">
                            <thead class="thead-dark">
                                <th>Id</th>
                                <th>Foto Aktifitas</th>
                                <th>Detail Aktifitas</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $row)
                                <tr>
                                    <td>{{($key+1)}}</td>
                                    <td>
                                        @foreach (json_decode($row->aktifitas) as $image)
                                        <img src="{{url('public/storage/'.$image)}}" style="height:120px; width:200px">
                                        @endforeach
                                    </td>
                                    <td>{!!$row->detail_aktifitas!!}</td>
                                    <td>{{ $row->status === 0 ? "Menunggu Konfirmasi" : "Di konfirmasi" }}</td>
                                    <td>
                                        <button type="button" data-id="{{$row->id}}" data-status="{{$row->status}}" class="btn btn-sm btn-warning edit">
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
                    <h5 class="modal-title" id="exampleModalLongTitle">edit aktifitas</h5>
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
                            </select>
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
        $("#dtable").DataTable({
        });
        $("#dtable .edit").on("click",function(){
            let params = $(this)
            let id = params.data("id")
            let status = params.data("status")
            $("#update").modal();

            $("#update").find(".modal-body input[status=status]").val(status)
            $("#update").find(".modal-body form").attr("action","{{route("pusat_sekre.aktifitas.update")}}/"+id)
            $("#update").find(".modal-title").text("Edit Data")
        })
    </script>
@stop
