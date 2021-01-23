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
                <div class="row">
                    <div class="col-md-6">
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
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <div class="form-group">
                              <label>Judul Proposal</label>
                              <input type="text" class="form-control" value={{$data->proposal->judul}} disabled>
                            </div>
                            <div class="form-group">
                              <label>Tempat Dilakukan</label>
                              <input type="text" value={{$data->proposal->tempat }} class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Dilakukan</label>
                                <input type="text" value={{ Carbon\Carbon::parse($data->tgl)->format('d-m-Y') }} class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label>Waktu Dilakukan</label>
                                <input type="text" value={{ Carbon\Carbon::parse($data->waktu)->format('h:i') }} class="form-control" disabled>
                              </div>
                            <div class="form-group mb-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="form-group">
                              <label>Total Donasi</label>
                              <input type="text" class="form-control" value={{$data->total_donasi}} disabled>
                            </div>
                            <div class="form-group">
                              <label>Catatan</label>
                              <input type="text" value={{$data->keterangan }} class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label>Bukti Transfer</label><br>
                                {{-- <input type="text" value={{ Carbon\Carbon::parse($data->tgl)->format('d-m-Y') }} class="form-control" disabled> --}}
                                <img src="{{url('public/storage/'.$data->bukti_transfer)}}" class="img-fluid" width="40%">
                            </div>
                            <form action="/pusat_sekre/donasi/update/{{$data->id}}" method="POST">
                                @csrf
                            <div class="form-group mb-4">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="2">Di Konfirmasi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                      <div class="float-left">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </form>
                      <div class="float-right">
                        <a href="{{ url()->previous() }}">
                            <button type="buttin" class="btn btn-primary">Kembali</button>
                            </a>
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
