@extends('adminlte::page')

@section('title', $title)

@section('content_header')

@stop
@section('content')
    <div class="row">
        <div class="col-6 offset-3">

            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{$title}}</h3>
                </div>

                <form action="{{route($route["name"],$route["params"])}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" value="{{ $data["username"] }}" placeholder="Username" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" value="{{ $data["password"] }}" placeholder="Password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    @include("msg")
@stop
