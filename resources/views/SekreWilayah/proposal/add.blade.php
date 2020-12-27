@extends('adminlte::page')

@section('title', $title)

@section('content_header')

@stop
@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{$title}}</h3>
                </div>

                <form action="{{route($route["name"],$route["params"])}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label >Judul</label>
                            <input type="text" name="judul" value="{{@$data['judul']}}" class="form-control"  placeholder="Judul">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label >Latar Belakang</label>
                            <textarea id="summernote" name="latar_belakang">{{@$data['latar_belakang']}}</textarea>
                        </div>
                        <div class="form-group">
                            <label >Kategori : </label>
                            <select name="kategori_id" class="select2 form-control" style="width: 25%;">
                                @foreach ($select as $row)
                                    <option value="{{$row->id}}" {{$row->id == @$data['kategori_id'] ? 'selected':''}}>{{$row->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Visibility : </label>
                            <select name="visibility" class="select2 form-control" style="width: 25%;">
                                <option value="0" {{@$data['visibility'] == 0 ? 'selected':''}}>Tidak Di Publikasi</option>
                                <option value="1" {{@$data['visibility'] == 1 ? 'selected':''}}>Di Publikasi</option>
                            </select>
                        </div>
                         <div class="form-group">
                            <label >Donasi : </label>
                            <select name="donate" class="select2 form-control" style="width: 25%;">
                                <option value="0" {{@$data['donate'] == 0 ? 'selected':''}}>Tidak Perlu Donasi</option>
                                <option value="1" {{@$data['donate'] == 1 ? 'selected':''}}>Perlu Donasi</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@stop

@section('css')
     <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote-bs4.min.css') }}">
@stop

@section('js')
    @include("msg")
    <!-- Summernote -->
    <script src="{{ asset('vendor/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(function () {
            $('#summernote').summernote()
        })
        $(function () {
            $('.select2').select2()
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
        })
    </script>
@stop
