@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    {{-- // --}}
@stop

@section('content')
     <div class="row">
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3>super admin</h3>
                    <p>super Admins</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                {{-- <a href="{{route('user')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>admin</h3>
                    <p>admin</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                {{-- <a href="{{route('user')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>asd</h3>
                    <p>asd</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>
        <!-- ./col -->
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
