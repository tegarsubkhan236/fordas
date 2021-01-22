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
                        <h2 class="ds-div-head page-header first-page-header">
                            Hallo {{ $data->name }} !!
                        </h2>
                        <a href="/profile" class="list-group-item active">
                            <span class="h5 list-group-item-heading h5"><center>My Profile</center></span>
                        </a>
                        <form class="mt-3">
                            <div class="form-group">
                              <label for="..">Nama</label>
                              <input type="text" class="form-control" value={{$data->name}} disabled>
                            </div>
                            <div class="form-group">
                              <label for="..">Jenis Kelamin</label>
                              <input type="text" class="form-control" value={{$data->gender = "L" ? "Laki-Laki" : "Perempuan"}} disabled>
                            </div>
                            <div class="form-group">
                                <label for="..">Nomer HP</label>
                                <input type="text" class="form-control" value={{$data->no_hp}} disabled>
                              </div>
                              <div class="form-group">
                                <label for="..">Alamat</label>
                              <textarea class="form-control" cols="15" rows="5" disabled>{{$data->alamat}}</textarea>
                              </div>
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
