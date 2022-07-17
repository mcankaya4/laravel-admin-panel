<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FixedPlus - Bootstrap Admin Dashboard Template</title>

    <!-- Common Plugins -->
    <link href="{{ asset('backend/assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Css-->
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">

    <style>
        html,body{
            height: 100%;
        }
    </style>
</head>
<body class="bg-light">
<div class="misc-wrapper">
    <div class="misc-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-xl-4 ">
                    <div class="misc-header text-center">
                        <img alt="" src="{{ asset('backend/assets/img/icon.png') }}" class="logo-icon margin-r-10">
                        <img alt="" src="{{ asset('backend/assets/img/logo-dark.png') }}" class="toggle-none hidden-xs">
                    </div>
                    <div class="misc-box">
                        @yield('content')
                    </div>
                    <div class="text-center misc-footer">
                        <p>Copyright &copy; 2018 FixedPlus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
