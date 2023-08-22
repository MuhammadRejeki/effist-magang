<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Developer Test | Magang</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="{{ url('assets/vendors/choices.js/choices.min.css') }}" />

    <link rel="stylesheet" href="{{ url('assets/css/app-pro.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/app-style.css') }}">

    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">

    @yield('custom-css')

    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
</head>

<body class="dark">
    <div id="app">
        @include('layout.sidebar')

        <div id="main" class="layout-navbar navbar-fixed">
            @include('layout.navbar')
            <div id="main-content">
                <div class="page-heading">
                    @yield('container')
                </div>
            </div>
            @include('layout.footer')
        </div>

    </div>


    <!-- <script src="https://zuramai.github.io/mazer/demo/assets/static/js/pages/form-element-select.js"></script> -->

    <!-- <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script> -->
    <script src="{{ url('assets/vendors/choices.js/choices.min.js') }}"></script>

    <script src="{{ url('assets/js/dark.js') }}"></script>
    <script src="{{ url('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('assets/js/app.js') }}"></script>

    @yield('custom-js')
</body>

</html>