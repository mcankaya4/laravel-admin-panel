<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FixedPlus - Bootstrap Admin Dashboard Template</title>

    <!-- Common Plugins -->
    <link href="{{ asset('backend/assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/assets/lib/toast/jquery.toast.min.css') }}" rel="stylesheet">

    <!-- Custom Css-->
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">

    @yield('css-in')

</head>
<body>

<!-- ============================================================== -->
<!-- 						Topbar Start 							-->
<!-- ============================================================== -->
@include('backend.includes.header')
<!-- ============================================================== -->
<!--                        Topbar End                              -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- 						Navigation Start 						-->
<!-- ============================================================== -->
@include('backend.includes.sidebar')
<!-- ============================================================== -->
<!-- 						Navigation End	 						-->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->

@yield('page_header')

<section class="main-content">

    @yield('content')

    <footer class="footer">
        <span>Copyright &copy; 2018 FixedPlus</span>
    </footer>

</section>
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->

<!-- Common Plugins -->
<script src="{{ asset('backend/assets/lib/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/lib/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('backend/assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/assets/lib/pace/pace.min.js') }}"></script>
<script src="{{ asset('backend/assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/assets/lib/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('backend/assets/lib/nano-scroll/jquery.nanoscroller.min.js') }}"></script>
<script src="{{ asset('backend/assets/lib/metisMenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom.js') }}"></script>
<script src="{{ asset('backend/assets/lib/toast/jquery.toast.min.js') }}"></script>
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
@yield('js-in')
</body>
</html>
