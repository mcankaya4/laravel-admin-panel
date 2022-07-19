<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CalmUI Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/jquery-toast-plugin/jquery.toast.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('backend/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.png') }}"/>
</head>

<body class="sidebar-light">
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
@include('backend.includes.header')
<!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
    @include('backend.includes.sidebar')
    <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- content-wrapper ends -->
        @include('backend.includes.footer')
        <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('backend/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="{{ asset('backend/js/off-canvas.js') }}"></script>
<script src="{{ asset('backend/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('backend/js/template.js') }}"></script>
<script src="{{ asset('backend/js/file-upload.js') }}"></script>
<script src="{{ asset('backend/vendors/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
<script>
    @if(Session::has('message'))
    $.toast({
        heading: "{{ Session::get('title') }}",
        text: "{{ Session::get('message') }}",
        showHideTransition: 'slide',
        icon: "{{ Session::get('type') }}",
        loaderBg: '#f96868',
        position: 'top-right'
    })
    @endif
    @if($errors->any())
    $.toast({
        heading: "Dikkat!",
        text: "Eksik veya hatalı form içeriği girdiniz.",
        showHideTransition: 'slide',
        icon: "warning",
        loaderBg: '#f96868',
        position: 'top-right'
    })
    @endif
</script>
@yield('js-in')
<!-- endinject -->
</body>

</html>



