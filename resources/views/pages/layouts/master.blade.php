<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel </title>
        <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('bower_components/user_assets/dest/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/user_assets/dest/vendors/colorbox/example3/colorbox.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/user_assets/dest/rs-plugin/css/settings.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/user_assets/dest/rs-plugin/css/responsive.css') }}">
        <link rel="stylesheet" title="style" href="{{ asset('bower_components/user_assets/dest/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/user_assets/dest/css/animate.css') }}">
        <link rel="stylesheet" title="style" href="{{ asset('bower_components/user_assets/dest/css/huong-style.css') }}">
        @yield('css')
    </head>
    <body>
        @include('pages.layouts.header')
        @include('pages.layouts.slider')
        @yield('content')
        @include('pages.layouts.footer')
        <script src="{{ asset('bower_components/user_assets/dest/js/jquery.j') }}"></script>
        <script src="{{ asset('bower_components/user_assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js') }}"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="{{ asset('bower_components/user_assets/dest/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
        <script src="{{ asset('bower_components/user_assets/dest/vendors/colorbox/jquery.colorbox-min.js') }}"></script>
        <script src="{{ asset('bower_components/user_assets/dest/vendors/animo/Animo.js') }}"></script>
        <script src="{{ asset('bower_components/user_assets/dest/vendors/dug/dug.js') }}"></script>
        <script src="{{ asset('bower_components/user_assets/dest/js/scripts.min.js') }}"></script>
        <script src="{{ asset('bower_components/user_assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('bower_components/user_assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('bower_components/user_assets/dest/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('bower_components/user_assets/dest/js/wow.min.js') }}"></script>
        <!--customjs-->
        <script src="{{ asset('bower_components/user_assets/dest/js/custom2.js') }}"></script>
        <script src="{{ asset('js/pages/layouts/master.js') }}"></script>
        @yield('js')
    </body>
</html>
