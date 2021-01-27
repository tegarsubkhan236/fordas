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
                            <h3>Donasi</h3>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                      <label>Nama Donator</label>
                      <input type="text" class="form-control" value={{$data->detail_donatur->name}} disabled>
                    </div>
                    <div class="form-group">
                      <label>Gender</label>
                      <input type="text" value={{$data->detail_donatur->gender = "L" ? "Laki=Laki":"Perempuan" }} class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" value={{$data->detail_donatur->alamat}} class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label>No HP</label>
                        <input type="text" value={{$data->detail_donatur->no_hp }} class="form-control" disabled>
                      </div>
                    <div class="form-group mb-0">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                      <a href="{{ url()->previous() }}">
                    <button type="buttin" class="btn btn-primary">Kembali</button>
                </a>
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
