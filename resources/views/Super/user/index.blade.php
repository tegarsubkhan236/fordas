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
                            <th>Username</th>
                            <th>Wilayah</th>
                            <th>DAS</th>
                            <th>Jabatan</th>
                            <th class="text-center">Action</th>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $row)
                                <tr>
                                    <td>{{($key+1)}}</td>
                                    <td>{{$row->username}}</td>
                                    <td>{{$row->das_id ? $row->wilayah_da->wilayah->nama : ""}}</td>
                                    <td>{{$row->das_id ? $row->wilayah_da->nama : ""}}</td>
                                    <td>{{$row->level}}</td>
                                    <td class="text-center">
                                        <button type="button" data-id="{{$row->id}}" data-nama="{{$row->username}}" data-password="{{$row->password}}" class="btn btn-sm btn-warning edit">
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
                            <div class="form-group">
                                <label >Name</label>
                                <input type="text" name="username" value="{{@$data['nama']}}" class="form-control"  placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label >Password</label>
                                <input type="text" name="password" value="{{@$data['password']}}" class="form-control"  placeholder="Password">
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
            let nama = params.data("nama")
            let password = params.data("password")
            $("#update").modal();

            $("#update").find(".modal-body input[name=username]").val(nama)
            $("#update").find(".modal-body input[name=password]").val(password)
            $("#update").find(".modal-body form").attr("action","{{route("user.update")}}/"+id)
            $("#update").find(".modal-title").text("Edit Data")
        })
    </script>
@stop
