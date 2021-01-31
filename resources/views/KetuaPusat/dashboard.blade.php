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
                            <i class="fa fa-globe"></i> FORDAS
                        </h2>
                        <p>Ketua Forum</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-fw fa-folder-o"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Proposal Menunggu Konfirmasi</span>
                      <span class="info-box-number">90<small>%</small></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Proposal Di Konfirmasi</span>
                      <span class="info-box-number">41,410</span>
                    </div>
                  </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
            </div> --}}

        </div>
    </div>
@stop

@section('footer')
    <strong>Copyright &copy; 2020 <a href="/">DAS Jawa Barat</a>.</strong> All rights reserved.
@stop

@section('css')

@stop

@section('js')

@stop
