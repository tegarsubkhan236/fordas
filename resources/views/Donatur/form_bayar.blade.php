<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link rel="shortcut icon" href="/themes/Mirage2/images/favicon.ico">
    <link rel="apple-touch-icon" href="/themes/Mirage2/images/apple-touch-icon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="{{ asset('asset/user.css') }}">
</head>

<body>
    <div id="MathJax_Message" style="display: none;"> </div>
    {{-- Header --}}
    @include('Landing.header')
    {{-- End Header --}}

    <div class="container" id="main-container">
        <div class="row row-offcanvas row-offcanvas-right active">
            <div class="horizontal-slider clearfix" style="width: 100%">
                <div
                    class="col-xs-12 col-sm-12 col-md-9 main-content"
                    style="min-height: 1967px;">
                    <div>
                        <a href="/donatur/dashboard" class="list-group-item active">
                            <span class="h5 list-group-item-heading h5"><center>My Dashboard</center></span>
                        </a>
                        <form class="mt-3 mb-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card text-center">
                                        <div class="card-header">
                                        </div>
                                        <div class="card-body">
                                          <h5 class="card-title">Menunggu Pembayaran</h5>
                                          <p class="card-text">Kirim pembayaran donasi anda ke rekening 12345678</p>
                                          <button class="btn btn-primary">Total Proposal : {{$data_menunggu_pembayaran->count()}}</button>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-center">
                                        <div class="card-header">
                                        </div>
                                        <div class="card-body">
                                          <h5 class="card-title">Menunggu Konfirmasi</h5>
                                          <p class="card-text">Kirim pembayaran donasi anda ke rekeningg 12345678</p>
                                          <button class="btn btn-primary">Total Proposal : {{$data_menunggu_konfirmasi->count()}}</button>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-center">
                                        <div class="card-header">
                                        </div>
                                        <div class="card-body">
                                          <h5 class="card-title">Donasi di terima KORWIL</h5>
                                          <p class="card-text">Kirim pembayaran donasi anda ke rekeningg 12345678</p>
                                          <button class="btn btn-primary">Total Proposal : {{$data_dikonfirmasi->count()}}</button>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </form>
                        <a href="/donatur/dashboard" class="list-group-item active">
                            <span class="h5 list-group-item-heading h5"><center>Detail Donasi</center></span>
                        </a>
                        <form class="mt-3 mb-3">
                            <div class="card text-center">
                                <div class="card-header">
                                    <h4><b>{{$data->proposal->judul}}</b></h4>
                                </div>
                                <br>
                                <div class="card-body">
                                <h5 class="card-title">Latar Belakang</h5>
                                <p class="card-text">{!!$data->proposal->latar_belakang!!}</p>
                                </div>
                            </div>
                        </form>
                        <form class="mt-3">
                            <div class="form-group">
                              <label for="..">Nama</label>
                              <input type="text" class="form-control" value={{$data->detail_donatur->name}} disabled>
                            </div>
                            <div class="form-group">
                              <label for="..">Jenis Kelamin</label>
                              <input type="text" class="form-control" value={{$data->detail_donatur->gender = "L" ? "Laki-Laki" : "Perempuan"}} disabled>
                            </div>
                            <div class="form-group">
                                <label for="..">Nomer HP</label>
                                <input type="text" class="form-control" value={{$data->detail_donatur->no_hp}} disabled>
                              </div>
                              <div class="form-group">
                                <label for="..">Alamat</label>
                                <textarea class="form-control" cols="15" rows="5" disabled>{{$data->detail_donatur->alamat}}</textarea>
                              </div>
                        </form>
                        <a href="/donatur/dashboard" class="list-group-item active">
                            <span class="h5 list-group-item-heading h5"><center>Formulir Donasi</center></span>
                        </a>
                        <form class="mt-3 mb-3" action="/donatur/proses_bayar/{{$data->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="..">Total Donasi</label>
                                <input type="number" name="total_donasi" class="form-control" required>
                              </div>
                              <div class="form-group">
                                <label for="..">Catatan</label>
                                <textarea class="form-control" name="keterangan" cols="15" rows="5" required></textarea>
                              </div>
                              <div class="form-group">
                                <label for="..">Bukti Transfer</label>
                                <input type="file" class="form-control" name="bukti_transfer" required>
                              </div>
                              <button type="submit" class="btn btn-primary btn-block">
                                Donasi
                            </button>
                        </form>
                    </div>
                </div>
                {{-- sidebar --}}
                @include('Landing.sidebar')
                {{-- end sidebar --}}
            </div>

        </div>
        <div class="hidden-xs hidden-sm">
            {{-- footer --}}
                @include('Landing.footer')
            {{-- end footer --}}
        </div>
    </div>
</body>
