<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--favicon-->
    <link rel="icon" href="{{ asset ('admin/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ url ('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ url ('admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ url ('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ url ('admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ url ('admin/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ url ('admin/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ url ('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url ('admin/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ url ('admin/assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ url ('admin/assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ url ('admin/assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ url ('admin/assets/css/header-colors.css') }}" />
    <title>Sobrokom Admin Panel</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--Include sidebar-->
        @include('admin.layout.sidebar')

        <!--Include header-->
        @include('admin.layout.header')

        @yield('content')




        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!--Include sidebar-->
        @include('admin.layout.footer')

    </div>
    <!--end wrapper-->


    <!-- Bootstrap JS -->
    <script src="{{ url ('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ url ('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ url ('admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ url ('admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ url ('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ url ('admin/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ url ('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ url ('admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ url ('admin/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ url ('admin/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
    <script src="{{ url ('admin/assets/plugins/jquery-knob/excanvas.js') }}"></script>
    <script src="{{ url ('admin/assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="{{ url ('admin/assets/js/index.js') }}"></script>
    <!--app JS-->
    <script src="{{ url ('admin/assets/js/app.js') }}"></script>

    <!-- custom js -->
    <script src="{{url ('admin/assets/js/custom_main.js')}}"></script>
</body>

</html>