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
    {{-- Menu --}}
    {{-- @include('Landing.menu') --}}
    {{-- End Menu --}}
    <div class="container" id="main-container">
        <div class="row row-offcanvas row-offcanvas-right active">
            <div class="horizontal-slider clearfix" style="width: 100%">
                <div
                    class="col-xs-12 col-sm-12 col-md-9 main-content"
                    style="min-height: 1967px;">
                    <div>
                        <div
                            class="col-xs-12 col-sm-12 col-md-12 main-content"
                            style="min-height: 1967px;">
                            <ul class="list-group">
                                <li class="list-group-item active text-center" aria-current="true">ABOUT</li>
                            </ul>
                            <h1>Tujuan Masyarakat?</h1>
                            <p>Website ini merupakan kumpulan proposal yang dapat dilihat untuk masyarakat atau pemerintah sebagai informasi setiap Daerah Aliran Sungai,
                            Tujuan sebagai berikut :
                            </p>
                            <ul>
                                <li>Pada halaman MENU terdapat beranda yaitu untuk melihat kumpulan proposal dari seluruh Daerah Aliran Sungai</li>
                                <li>Pada halaman BROWSE terdapat kategori-kategori Daerah Aliran Sungai yang terdapat di kota tersebut</li>
                            </ul>
                            <br><br><br>
                            <h1>Donasi</h1>
                            <p>Proposal merupakan informasi kegiatan yang dilakukan setiap Daerah Aliran Sungai, terdapat proposal atau kegiatan yang berisikan form donasi sebagai berikut :</p>
                            <ul>
                                <li>Pilih Daerah Aliran Sungai yang akan diberikan donasi</li>
                                <li>Pilih Porposal yang terdapat form donasi</li>
                            </ul>
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
