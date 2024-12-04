<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/css/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/css/style.css') }}">


    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('files/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('files/icon/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/favicon.png">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div>
        <div id="wrapper">
            <!-- #page -->
            <div id="page" class="">
                <!-- layout-wrap -->
                <div class="layout-wrap">
                    <!-- preload -->
                    <div id="preload" class="preload-container">
                        <div class="preloading">
                            <span></span>
                        </div>
                    </div>

                    @include('layouts.sidebar')

                    <div class="section-content-right">
                        <!-- header-dashboard -->
                        @include('layouts.header')

                        <!-- /header-dashboard -->
                        <!-- main-content -->
                        <!-- Page Content -->
                        <main>
                            @yield('admin-dashboard')
                        </main>
                        <!-- /main-content -->
                    </div>
                </div>
            </div>
        </div>





        <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <!-- /preload -->
                <!-- section-menu-left -->
                @include('layouts.sidebar')
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                @include('layouts.header')
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>

    <script src="{{ asset('files/js/jquery.min.js') }}"></script>
    <script src="{{ asset('files/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('files/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('files/js/zoom.js') }}"></script>
    <script src="{{ asset('files/js/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('files/js/apexcharts/line-chart-17.js') }}"></script>
    <script src="{{ asset('files/js/apexcharts/line-chart-18.js') }}"></script>
    <script src="{{ asset('files/js/apexcharts/line-chart-19.js') }}"></script>
    <script src="{{ asset('files/js/apexcharts/line-chart-20.js') }}"></script>
    <script src="{{ asset('files/js/apexcharts/line-chart-21.js') }}"></script>
    <script src="{{ asset('files/js/apexcharts/line-chart-22.js') }}"></script>
    {{-- <script src="{{ asset('files/js/switcher.js')}}"></script> --}}
    <script src="{{ asset('files/js/theme-settings.js') }}"></script>
    <script src="{{ asset('files/js/main.js') }}"></script>
</body>

</html>
