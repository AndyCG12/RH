<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'RH | Andy')</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/apple/app.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/plugins/ionicons/dist/ionicons/ionicons.js') }}"></script>
    <!-- ================== END core-css ================== -->

    <!-- ================== BEGIN page-css ================== -->
    @stack('styles')
    <!-- ================== END page-css ================== -->
</head>
<body>
    <!-- BEGIN #loader -->
    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>
    <!-- END #loader -->

    <!-- BEGIN #app -->
    <div id="app" class="app app-header-fixed app-sidebar-fixed">
        @include('includes.header')
        @include('includes.sidebar')

        <div class="app-content">
            @yield('content')
        </div>
    </div>
    <!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- ================== END core-js ================== -->

    <!-- ================== BEGIN page-js ================== -->
    @stack('scripts')
    <!-- ================== END page-js ================== -->
</body>
</html>
