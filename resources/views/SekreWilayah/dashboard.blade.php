@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    {{-- // --}}
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                        <h2 class="page-header">
                            <i class="fa fa-globe"></i> {{$data->nama}}
                        </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-folder"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Proposal Menunggu Konfirmasi</span>
                <span class="info-box-number">{{ $wait->count() }}</span>
            </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-folder"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Proposal Di Tolak</span>
                <span class="info-box-number">{{ $fail->count() }}</span>
            </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-folder"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Proposal Di Konfirmasi</span>
                <span class="info-box-number">{{ $acc->count() }}</span>
            </div>
            </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-file"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Proposal Membutuhkan Donasi</span>
                <span class="info-box-number">{{ $donate->count() }}</span>
            </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-file"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Proposal Tidak Membutuhkan Donasi</span>
                <span class="info-box-number">{{ $no_donate->count() }}</span>
            </div>
            </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
    </div>
@stop

@section('footer')
    <strong>Copyright &copy; 2020 <a href="/">DAS Jawa Barat</a>.</strong> All rights reserved.
@stop

@section('css')

@stop

@section('js')

@stop
