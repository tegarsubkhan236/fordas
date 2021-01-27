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
                        <a href="dashboard" class="list-group-item active">
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
                                          <button class="btn btn-primary">Total Proposal : {{$data->count()}}</button>
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
                            <span class="h5 list-group-item-heading h5"><center>Donasi Menunggu Pembayaran</center></span>
                        </a>
                        <form class="mt-3 mb-3">
                            @if ($data->count() > 0)
                                @foreach ($data as $item)
                                <br>
                                <div class="card">
                                <div class="card-header">
                                {{$item->proposal->judul}}
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Status :
                                        @if ($item->status == 0)
                                            Menunggu Pembayaran
                                        @endif
                                    </h5>
                                    <p class="card-text">{!! substr($item->proposal->latar_belakang, 0,  200) !!}</p>
                                    <a href="form_bayar_donasi/{{$item->id}}" class="btn btn-primary">Donasi Sekarang</a>
                                </div>
                                </div><br>
                            @endforeach
                            @else
                                <div class="form-group">
                                    <input type="text" class="form-control" value="Tidak Ada Data" disabled>
                                </div>
                            @endif
                        </form>
                        <a href="/donatur/dashboard" class="list-group-item active">
                            <span class="h5 list-group-item-heading h5"><center>Donasi Menunggu Konfirmasi</center></span>
                        </a>
                        <form class="mt-3 mb-3">
                                @if ($data_menunggu_konfirmasi->count() > 0)
                                @foreach ($data_menunggu_konfirmasi as $item)
                                <br>
                                <div class="card">
                                <div class="card-header">
                                {{$item->proposal->judul}}
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Status :
                                        @if ($item->status == 1)
                                            Donasi Menunggu Konfirmasi
                                        @endif
                                    </h5>
                                    <p class="card-text">{!! substr($item->proposal->latar_belakang, 0,  200) !!}</p>
                                </div>
                                </div><br>
                                @endforeach
                                @else
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Tidak Ada Data" disabled>
                                    </div>
                                @endif
                        </form>
                        <a href="/donatur/dashboard" class="list-group-item active">
                            <span class="h5 list-group-item-heading h5"><center>Donasi Di Konfirmasi</center></span>
                        </a>
                        <form class="mt-3 mb-3">
                            @if ($data_dikonfirmasi->count() > 0)
                                @foreach ($data_dikonfirmasi as $item)
                                <br>
                                <div class="card">
                                <div class="card-header">
                                {{$item->proposal->judul}}
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Status :
                                        @if ($item->status == 2)
                                            Donasi Di Konfirmasi
                                        @endif
                                    </h5>
                                    <p class="card-text">{!! substr($item->proposal->latar_belakang, 0,  200) !!}</p>
                                    <a href="form_bayar_donasi/{{$item->id}}" class="btn btn-primary">Cetak bukti Donasi</a>
                                </div>
                                </div><br>
                            @endforeach
                            @else
                                <div class="form-group">
                                    <input type="text" class="form-control" value="Tidak Ada Data" disabled>
                                </div>
                            @endif
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
