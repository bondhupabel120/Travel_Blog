<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link type="text/css" href="{{ asset('assets/backend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('assets/backend/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('assets/backend/css/theme.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('assets/backend/images/icons/css/font-awesome.css') }}" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
    </head>
<body>

<!-- Navbar -->
@include('backend.partials.header')
<!-- /navbar -->

<!-- Wrapper -->
<div class="wrapper">
    <div class="container">
        <div class="row">
            <!--Sidebar-->
            @include('backend.partials.sidebar')

            @yield('content')
        </div>
    </div>
</div>
<!--/.wrapper-->

@yield('js')
@include('backend.partials.js')
<div class="footer">
    <div class="container">
        <b class="copyright">&copy; {{ \Carbon\Carbon::now()->format('Y') }} Admin - History BD </b>All rights reserved.
    </div>
</div>

<script src="{{ asset('assets/backend/scripts/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/scripts/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/scripts/flot/jquery.flot.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/scripts/flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/scripts/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/scripts/common.js') }}" type="text/javascript"></script>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
</body>
