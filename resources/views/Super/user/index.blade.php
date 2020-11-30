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
                            <th>DAS</th>
                            <th>Jabatan</th>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $row)
                                <tr>
                                    <td>{{($key+1)}}</td>
                                    <td>{{$row->username}}</td>
                                    <td>{{$row->wilayah_da}}</td>
                                    <td>{{$row->level}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Data Modal -->
    {{-- <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{$title}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route($route_create["name"])}}" method="post">
                    @csrf
                        @include('Super.wilayah.form')
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Update Data Modal -->
    {{-- <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        @include('Super.wilayah.form')
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
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
