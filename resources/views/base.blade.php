<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="breakcodecompany@gmail.com" name="author" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}">
    <link href="{{ asset('css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    @yield('css')
</head>
    <body data-sidebar="dark" data-layout-mode="light">
        <div id="layout-wrapper">
        @include('nav-top')
        @include('nav')
        <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
        @yield('main')
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © BBC.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Break Code Company
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
        </div>

        <script src="{{ asset('libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('js/pages/dashboard.init.js')}}"></script>
        <script src="{{ asset('libs/node-waves/waves.min.js')}}"></script>
        @yield('src')
        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>


