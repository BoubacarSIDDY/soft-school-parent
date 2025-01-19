<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <!--Title-->
    <title>{{env('APP_NAME')}} | {{ $title ?? '' }}</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/icons/fontawesome/css/all.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/vendor/sweetalert2/sweetalert2.min.css')}}">
</head>

<body style="background-image:url('assets/images/bg.png'); background-position:center;">
    <div class="authincation fix-wrapper">
        <div class="container h-100">
            @yield('content')
        </div>
    </div>

    <script src="{{asset('assets/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <script src="{{asset('assets/js/deznav-init.js')}}"></script>
    <script src="{{asset('assets/vendor/sweetalert2/sweetalert2.min.js')}}"></script>
    @yield('js')
</body>
</html>
