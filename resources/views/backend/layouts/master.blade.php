<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Blize - Title</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('backend/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{ asset('backend/assets/css/styles/all-themes.css') }}" rel="stylesheet" />

    @yield('css-in')
</head>

<body class="light">
<!-- #END# Page Loader -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
@include('backend.includes.header')
<!-- #Top Bar -->
<div>
    @include('backend.includes.sidebar')
</div>
<section class="content">
    <div class="container-fluid">
        @yield('content')
    </div>
</section>
<script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('backend/assets/js/admin.js') }}"></script>
@yield('js-in')
<script>
    @if(Session::has('message'))
    $.toast({
        heading: "{{ Session::get('title') }}",
        text: "{{ Session::get('message') }}",
        position: 'top-right',
        loaderBg: '#fff',
        icon: "{{ Session::get('type') }}",
        hideAfter: 3000,
        stack: 1
    });
    @endif
    @if($errors->any())
    $.toast({
        heading: "Dikkat!",
        text: "Eksik veya hatalı form içeriği girdiniz.",
        position: 'top-right',
        loaderBg: '#fff',
        icon: "warning",
        hideAfter: 3000,
        stack: 1
    });
    @endif
</script>
</body>
</html>
