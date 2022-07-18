<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>Blize - Bootstrap 4 Hospital Admin Dashboard Template</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('backend/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/pages/extra_pages.css') }}" rel="stylesheet"/>
    <!-- Custom Css -->
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet"/>
</head>

<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            @yield('content')
            <div class="login100-more"
                 style="background-image: url('{{ asset('backend/assets/images/pages/auth.png') }}');">
            </div>
        </div>
    </div>
</div>

<!-- Plugins Js -->
<script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
<!-- Extra page Js -->
<script src="{{ asset('backend/assets/js/pages/examples/pages.js') }}"></script>
</body>

</html>
