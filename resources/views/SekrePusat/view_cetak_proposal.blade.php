@extends('adminlte::page')

@section('title', 'Cetak Proposal')

@section('content_header')

@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Cetak Proposal</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <form action="/pusat_sekre/proposal/cetak_by_created" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Tanggal Dibuat</label>
                                    <input name="created_at" type="date" class="form-control">
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-primary">Cetak</button>
                                </center>
                            </form>
                        </div>
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
