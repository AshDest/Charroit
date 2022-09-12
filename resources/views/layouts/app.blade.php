<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- START: Head-->
    <head>
        <meta charset="UTF-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="{{ asset('dist/images/favicon.ico') }}" />
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- START: Template CSS-->
        <link rel="stylesheet" href="{{ asset('dist/vendors/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/vendors/jquery-ui/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/vendors/jquery-ui/jquery-ui.theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/vendors/simple-line-icons/css/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/vendors/flags-icon/css/flag-icon.min.css') }}">

        <!-- END Template CSS-->

        <!-- START: Page CSS-->
        <link rel="stylesheet" href="{{ asset('dist/vendors/social-button/bootstrap-social.css') }}"/>
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}">
        <!-- END: Custom CSS-->

    </head>
    <!-- END Head-->

    <!-- START: Body-->
    <body id="main-container" class="default">

        @yield('login-content')

        <!-- START: Template JS-->
        <script src="{{ asset('dist/vendors/jquery/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('dist/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('dist/vendors/moment/moment.js') }}"></script>
        <script src="{{ asset('dist/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dist/vendors/slimscroll/jquery.slimscroll.min.js') }}"></script>

        <!-- END: Template JS-->
    </body>
    <!-- END: Body-->
</html>
