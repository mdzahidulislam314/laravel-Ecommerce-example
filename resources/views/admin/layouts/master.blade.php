<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Web UI Kit &amp; Dashboard Template based on Bootstrap">
    <meta name="keywords" content="adminkit, bootstrap, web ui kit, dashboard template, admin template">

    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <title>@if(isset($title)){{ $title }} - @endif{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/admin/ionicon/css/ionicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/admin/css/toastr.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="/vendor/datatables/datatables.min.css">
    <link rel="stylesheet" href="/vendor/datatables/dataTables.bootstrap4.min.css" >
    <link rel="stylesheet" href="/admin/css/font-awesome.min.css">
    <link href="/admin/css/app.css" rel="stylesheet">
    <link href="/admin/css/custom.css" rel="stylesheet">

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>


    @yield('css')
</head>
<body>

<div class="wrapper">

    @include('admin.layouts.sidebar')

    <div class="main">
        @include('admin.layouts.navbar')

        @yield('content')

        @include('admin.layouts.footer')
    </div>

</div>

<script src="/admin/js/vendor.js"></script>
<script src="/admin/js/app.js"></script>
<script src="/vendor/datatables/datatables.min.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="/admin/js/toastr.min.js"></script>


@yield('js')
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "3000",
        "hideDuration": "3000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

</script>



@if (Session::has('warning'))
    <script>
        toastr.warning("{{ Session::get('warning') }}", 'Warning');
    </script>
@endif

@if (Session::has('message'))
    <script>
        toastr.info("{{ Session::get('message') }}", 'Info');
    </script>
@endif

@if (Session::has('success'))
    <script>
        toastr.success("{{ Session::get('success') }}", 'Success');
    </script>
@endif

@if (Session::has('error'))
    <script>
        toastr.error("{{ Session::get('error') }}", 'Error');
    </script>
@endif

<script>
    // add csrf token to ajax request
    $.ajaxSetup({
        headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

</script>

<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{$error}}', 'Error', {
        closeButton:true,
        progressBar:true,
    });
    @endforeach
    @endif
</script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
@stack('scripts')

</body>
</html>

