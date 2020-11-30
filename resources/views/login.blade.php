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
                <div class="col-xs-12 col-sm-12 col-md-9 main-content" style="min-height: 1967px;">
                    <div class="row">
                        <form action="{{route("login")}}" method="post">
                            {{ csrf_field() }}
                            <div class="col-6 offset-3">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    {{-- <input type="text" bind:value={username} class="form-control" /> --}}
                                    <input type="text" name="username" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" value="{{ old('username') }}" placeholder="Username" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    {{-- <input type="password" bind:value={password} class="form-control" /> --}}
                                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">
                                    Masuk
                                    </button>
                                </div>
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
