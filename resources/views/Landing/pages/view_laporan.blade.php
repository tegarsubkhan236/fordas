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
    <div class="container" id="main-container">
        <div class="row row-offcanvas row-offcanvas-right active">
            <div class="horizontal-slider clearfix" style="width: 100%">
                <div
                    class="col-xs-12 col-sm-12 col-md-9 main-content"
                    style="min-height: 1967px;">
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true"><p class="jutify-center">{{ $data->judul }}</p></li>
                    </ul>
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-9 pull-left">
                                    kategori : {{ $data->proposal_kategori->nama }}
                                </div>
                                <div class="col-md-3 pull-right">
                                    {{ $data->tempat }}. {{ \Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <br>
                            <h5>Latar Belakang</h5>
                            <div class="card-text">{!! $data->latar_belakang !!}</div>
                            <br>
                            <h5>Maksud dan Tujuan</h5>
                            <div class="card-text">{!! $data->maksud_tujuan !!}</div>
                            <br>
                            <h5>Waktu dan Tempat Pelaksanaan</h5>
                            <div class="card-text">
                                <table border="0" style="width: 352px;">
                                    <tbody>
                                        <tr>
                                            <td width="80">
                                                <span>hari/tanggal</span>
                                            </td>
                                            <td width="10">
                                                <span >:</span>
                                            </td>
                                            <td width="248">
                                                <span >{{$data->tgl}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span >waktu</span>
                                            </td>
                                            <td>
                                                <span >:</span>
                                            </td>
                                            <td>
                                                <span >{{$data->waktu}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span >tempat</span>
                                            </td>
                                            <td>
                                                <span >:</span>
                                            </td>
                                            <td>
                                                <span >{{$data->tempat}}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <h5>Peserta</h5>
                            <div class="card-text">{!! $data->peserta !!}</div>
                            <br>
                            <h5>Narasumber</h5>
                            <div class="card-text">{!! $data->narasumber !!}</div>
                            <br>
                            <h5>Bahasan Acara</h5>
                            <div class="card-text">{!! $data->bahasan !!}</div>
                            <br>
                        </div>
                        <div class="card-footer">
                            @if (session()->get("level") == 5 && $data->donate == 1)
                            <a href="/donatur/pilih_donasi/{{ $data->id }}">
                                <button type="button" class="btn btn-primary">
                                    Donasi
                                </button>
                            </a>
                            @elseif(session()->get("level") == 5 && $data->donate == 0)

                            @else
                                <a href="/login">
                                    <button type="button" class="btn btn-primary">
                                        Donasi
                                    </button>
                                </a>
                            @endif
                        </div>
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
