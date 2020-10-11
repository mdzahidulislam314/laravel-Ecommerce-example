<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ChunaPuti - Unique eCommerce Website in Bangladesh</title>
    <meta name="author" content="p-themes">
    <!-- Favicon -->

    <link rel="shortcut icon" href="/site/assets/images/icons/favicon.ico">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="/site/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="/site/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="/site/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/site/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/site/assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="/site/assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="/site/assets/css/style.css">
    <link rel="stylesheet" href="/site/assets/css/skins/skin-demo-13.css">
    <link rel="stylesheet" href="/site/assets/css/demos/demo-13.css">

    @yield('css')
</head>

<body>


<div class="page-wrapper">
    @include('layouts.header')

    @yield('main')

    @include('layouts.footer')
</div>
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

@include('partials.mobile-menu')

@include('partials.signup-login')

@include('partials.newslatter-popup')



<!-- Plugins JS File -->
<script src="/site/assets/js/jquery.min.js"></script>
<script src="/site/assets/js/bootstrap.bundle.min.js"></script>
<script src="/site/assets/js/jquery.hoverIntent.min.js"></script>
<script src="/site/assets/js/jquery.waypoints.min.js"></script>
<script src="/site/assets/js/superfish.min.js"></script>
<script src="/site/assets/js/owl.carousel.min.js"></script>
<script src="/site/assets/js/bootstrap-input-spinner.js"></script>
<script src="/site/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/site/assets/js/jquery.plugin.min.js"></script>
<script src="/site/assets/js/jquery.countdown.min.js"></script>
<script src="/site/assets/js/jquery.elevateZoom.min.js"></script>

<!-- Main JS File -->
<script src="/site/assets/js/main.js"></script>
<script src="/site/assets/js/demos/demo-13.js"></script>

@yield('script')
</body>

</html>