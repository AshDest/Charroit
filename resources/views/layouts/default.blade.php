<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<head>
    <meta charset="UTF-8">
    <title>Cabinet</title>
    <link rel="shortcut icon" href="{{ asset('dist/images/favicon3.png') }}" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta id="token" name="token" content="{{ csrf_token() }}">
    <title>Cabinet Avocat</title>
    <link rel="shortcut icon" href="{{ asset('dist/images/favicon.ico') }}" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Head-->
    <head>
        <meta charset="UTF-8">
        <title>Cabinet</title>
        <link rel="shortcut icon" href="{{ asset('dist/images/favicon3.png') }}"/>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta id="token" name="token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('dist/vendors/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/vendors/jquery-ui/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/vendors/jquery-ui/jquery-ui.theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/vendors/simple-line-icons/css/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/vendors/flags-icon/css/flag-icon.min.css') }}">


    <link rel="stylesheet" href="{{ asset('dist/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/jquery-ui/jquery-ui.theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/flags-icon/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/flags-icon/css/flag-icon.min.css') }}">
    <!-- END Template CSS-->

    <link href="{{ asset('dist/vendors/lineprogressbar/jquery.lineProgressbar.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('dist/vendors/chartjs/Chart.min.css') }}">

        <link rel="stylesheet"  href="{{ asset('dist/vendors/chartjs/Chart.min.css') }}">

        <link rel="stylesheet" href="{{ asset('dist/vendors/morris/morris.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/vendors/weather-icons/css/pe-icon-set-weather.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/vendors/starrr/starrr.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/vendors/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/vendors/ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css') }}">
        <!-- END: Page CSS-->

    <link rel="stylesheet" href="{{ asset('dist/vendors/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/weather-icons/css/pe-icon-set-weather.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/starrr/starrr.css') }}">
    <!-- START: Page CSS-->
    <link rel="stylesheet" href="{{ asset('dist/vendors/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/weather-icons/css/pe-icon-set-weather.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/chartjs/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/starrr/starrr.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css') }}">
    <!-- END: Page CSS-->

    <!-- SWEATALERT
            ============================================= -->
    <link rel="stylesheet" href="{{ asset('dist/css/sweetalert2.min.css') }}">
    <!-- ============================================ -->


    <!--
            FOT TOAST
            ========================================================================== -->
    <link rel="stylesheet" href="{{ asset('dist/vendors/toastr/toastr.min.css') }}" />
    <!-- ========================================================================= -->

    <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/mycss.css') }}">

    <!--

            FOT TABLES
            ========================================================================== -->
    <link rel="stylesheet" href="{{ asset('dist/vendors/tablesaw/tablesaw.css') }}">
    <!-- ========================================================================= -->

    <!-- END: Custom CSS-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- livewire style
        =======================================================  -->
    {{-- personalize tooltip style --}}
    <style>
        .tooltipcabinet {
            position: relative;
            display: inline-block;
        }

        .tooltipcabinet .tooltiptextcabinet {
            visibility: hidden;
            width: 180px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

            /* Position the tooltip */
            position: absolute;
            z-index: 1;
            top: -5px;
            left: 105%;
        }
        .tooltipcabinet:hover .tooltiptextcabinet {
            visibility: visible;
            opacity: 1;
        }

    </style>
    @livewireStyles


</head>
<!-- END Head-->
        @livewireStyles
        @stack('script-avocat')
    </head>
    <!-- END Head-->

<!-- START: Body-->

<body id="main-container" class="default">

    @include('layouts.header')

    @include('layouts.menu')

    @yield('content')

    @include('layouts.footer')

    @include('layouts.scrollup')

    <!-- livewire scripts -->
    @livewireScripts

    <script src="{{ asset('dist/vendors/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/moment/moment.js') }}"></script>
    <script src="{{ asset('dist/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('dist/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('dist/js/sweetalert.script.js') }}"></script>

             FOT TOAST
    <script src="{{ asset('dist/vendors/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('dist/js/toastr.script.js') }}"></script>

    <script type="text/javascript">
        window.addEventListener('ok', function(event) {
            // window.location.reload(true);
            toastr.success(event.detail.message);
        });
        window.addEventListener('alertsuccess', function(event) {
            // window.location.reload(true);
            toastr.success(event.detail.message);
            setTimeout(function() {

        <!-- livewire scripts -->
        @livewireScripts
        <script src="{{ asset('dist/vendors/jquery/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('dist/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('dist/vendors/moment/moment.js') }}"></script>
        <script src="{{ asset('dist/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dist/vendors/slimscroll/jquery.slimscroll.min.js') }}"></script>



        <script src="{{ asset('dist/js/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('dist/js/sweetalert.script.js') }}"></script>



        <script src="{{ asset('dist/vendors/toastr/toastr.min.js') }}"></script>
        <script src="{{ asset('dist/js/toastr.script.js') }}"></script>

         <script type="text/javascript">

             window.addEventListener('ok', function(event){
                 // window.location.reload(true);
                 toastr.success(event.detail.message);
             });
             window.addEventListener('alertsuccess', function(event){
                 // window.location.reload(true);
                 toastr.success(event.detail.message);
                 setTimeout(function () {
                window.location.href = "/add-cabinet"; //will redirect to your blog page (an ex: blog.html)
            }, 6000);
        });

        window.addEventListener('fail', function(event) {
            //window.location.reload(true);
            toastr.success(event.detail.message);
        });

        window.addEventListener('info', function(event) {
            //window.location.reload(true);
            toastr.success(event.detail.message);
        });
    </script>
             FOT TABLES
    <script src="{{ asset('dist/vendors/tablesaw/tablesaw.js') }}"></script>
    <script src="{{ asset('dist/vendors/tablesaw/tablesaw-init.js') }}"></script>

    <script src="{{ asset('dist/vendors/jquery-flot/jquery.canvaswrapper.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.colorhelpers.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.saturated.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.browser.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.drawSeries.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.uiConstants.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.legend.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.pie.js') }}"></script>

    <script src="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js') }}"></script>
    <script src="{{ asset('dist/vendors/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('dist/vendors/lineprogressbar/jquery.lineProgressbar.js') }}"></script>
    <script src="{{ asset('dist/vendors/lineprogressbar/jquery.barfiller.js') }}"></script>

    <script src="{{ asset('dist/js/app.js') }}"></script>

    <script src="{{ asset('dist/vendors/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/morris/morris.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/starrr/starrr.js') }}"></script>


    <script src="{{ asset('dist/js/home.script.js') }}"></script>


    <!-- START: Template JS -->
    <script src="{{ asset('dist/vendors/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/moment/moment.js') }}"></script>
    <script src="{{ asset('dist/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- END: Template JS -->

    <!-- START: APP JS-->
    <script src="{{ asset('dist/js/app.js') }}"></script>
    <!-- END: APP JS-->

    <!-- START: Page Vendor JS-->
    <script src="{{ asset('dist/vendors/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/morris/morris.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/starrr/starrr.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.canvaswrapper.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.colorhelpers.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.saturated.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.browser.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.drawSeries.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.uiConstants.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.legend.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('dist/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js') }}"></script>
    <script src="{{ asset('dist/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- START: Page JS-->
    <script src="{{ asset('dist/js/home.script.js') }}"></script>
    <!-- END: Page JS-->

    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-end',
            showConfirmButton: false,
            showCloseButton: true,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        window.addEventListener('alert', ({
            detail: {
                type,
                message
            }
        }) => {
            Toast.fire({
                icon: type,
                title: message
            })
        })
    </script>
</body>
<!-- END: Body-->

=======
         </script>

            <!--FOT TABLES
                ========================================================================== -->
             <script src="{{ asset('dist/vendors/tablesaw/tablesaw.js') }}"></script>
             <script src="{{ asset('dist/vendors/tablesaw/tablesaw-init.js') }}"></script>
             <!-- ========================================================================== -->

             <script src="{{ asset('dist/vendors/jquery-flot/jquery.canvaswrapper.js') }}"></script>
             <script src="{{ asset('dist/vendors/jquery-flot/jquery.colorhelpers.js') }}"></script>
             <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.js') }}"></script>
             <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.saturated.js') }}"></script>
             <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.browser.js') }}"></script>
             <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.drawSeries.js') }}"></script>
             <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.uiConstants.js') }}"></script>
             <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.legend.js') }}"></script>
             <script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.pie.js') }}"></script>

             <script src="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
             <script src="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
             <script src="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js') }}"></script>
             <script src="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js') }}"></script>
             <script src="{{ asset('dist/vendors/apexcharts/apexcharts.min.js') }}"></script>

             <script  src="{{ asset('dist/vendors/lineprogressbar/jquery.lineProgressbar.js') }}"></script>
             <script  src="{{ asset('dist/vendors/lineprogressbar/jquery.barfiller.js') }}"></script>

             <script src="{{ asset('dist/js/app.js') }}"></script>

             <script src="{{ asset('dist/vendors/raphael/raphael.min.js') }}"></script>
             <script src="{{ asset('dist/vendors/morris/morris.min.js') }}"></script>
             <script src="{{ asset('dist/vendors/chartjs/Chart.min.js') }}"></script>
             <script src="{{ asset('dist/vendors/starrr/starrr.js') }}"></script>


             <script src="{{ asset('dist/js/home.script.js') }}"></script>

    </body>
</html>
