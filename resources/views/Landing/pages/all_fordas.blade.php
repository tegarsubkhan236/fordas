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
                    class="col-xs-12 col-sm-12 col-md-3 main-content"
                    style="min-height: 1967px;">
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true">Wilayah</li>
                        @foreach ($data as $item)
                            <a href="/all_fordas/{{ $item->id }}"><li class="list-group-item">{{ $item->nama }}</li></a>                        
                        @endforeach
                    </ul>
                </div>

                <div
                    class="col-xs-12 col-sm-12 col-md-6 main-content"
                    style="min-height: 1967px;">
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true">List DAS</li>
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
