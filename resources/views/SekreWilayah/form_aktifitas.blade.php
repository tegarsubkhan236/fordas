@extends('adminlte::page')

@section('title', "FORM_AKTIFITAS")

@section('content_header')

@stop
@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Form Aktifitas {{$data->judul}}</h3>
                </div>

                <form action="/wilayah_sekre/proposal/laporan_aktifitas/{{$data->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label >Judul</label>
                            <input type="text" name="judul" value="{{@$data['judul']}}" class="form-control"  disabled>
                        </div>
                        <div class="form-group">
                            <label>Foto Aktifitas</label>
                            <input type="file" name="file_aktifitas[]" multiple class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label >Detail Aktifitas</label>
                            <textarea id="summernote" name="detail_aktifitas"></textarea>
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
            $('#summernote2').summernote()
            $('#summernote3').summernote()
            $('#summernote4').summernote()
            $('#summernote5').summernote()
            $('#summernote6').summernote()
        })
        $(function () {
            $('.select2').select2()
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
        })
    </script>
@stop
