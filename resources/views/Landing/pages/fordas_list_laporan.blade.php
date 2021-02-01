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
                        <li class="list-group-item text-center"><h4>Wilayah DAS {{ $detail->nama }}</h4></li>
                    </ul>
                    {{-- Tidak Perlu Donasi --}}
                    <ul class="list-group">
                        <li class="list-group-item active text-center" aria-current="true">Proposal</li>
                        @if (   $data->count() > 0)
                            @foreach (   $data as $item)
                            <li class="list-group-item">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <a href="/view_laporan/{{ $item->id }}">
                                                    {{ $item->judul }}
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="pull-right">
                                                    {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text"><br>{!! substr($item->latar_belakang, 0,  200) !!}....</div>
                                    </div>
                                    <div class="card-footer">
                                        @if (session()->get("level") == 5 && $item->donate == 1)
                                            <a href="/donatur/pilih_donasi/{{ $item->id }}">
                                                <button type="button" class="btn btn-primary">
                                                    Donasi
                                                </button>
                                            </a>
                                        @elseif(session()->get("level") == 5 && $item->donate == 0)

                                        @else
                                            <a href="/login">
                                                <button type="button" class="btn btn-primary">
                                                    Donasi
                                                </button>
                                            </a>
                                        @endif
                                </div>
                            </li>
                            @endforeach
                        @else
                        <div class="card">
                            <div class="card-body">
                                <div class="card-text">
                                    <h3 class="text-center">Laporan Tidak Tersedia</h3></div>
                            </div>
                        </div>
                        @endif
                        <br/>
                        Halaman : {{    $data->currentPage() }} <br/>
                        Jumlah Data : {{    $data->total() }} <br/>
                        {!!    $data->render() !!}
                    </ul>

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
