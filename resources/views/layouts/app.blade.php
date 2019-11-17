<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Afmaaj Properties | Real Estate </title>

    <link href="{{ url('img/favicon.png') }}" rel="icon">
    <link href="{{ url('img/apple-touch-icon.png') }}" rel="apple-touch-icon">


    <!-- Styles -->
    @include('layouts.styles')
</head>
<body class="green-skin">

    @include('layouts.preloader')

    <div id="main-wrapper">
        @include('layouts.topnav')


        @yield('content')

        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    @include('layouts.scripts')

</body>
</html>
