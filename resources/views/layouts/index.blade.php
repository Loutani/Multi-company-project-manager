<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project Manager - @yield('title', '')</title>

    <link rel="shortcut icon" href="{{asset('template/images/favicon.ico')}}" />

    <link rel="stylesheet" href="{{asset('template/css/backend-plugin.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/backend.css?v=1.0.0')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/remixicon/fonts/remixicon.css')}}">

</head>
<body>

    @include('partials.loader')

    <div class="wrapper">

        @include('partials.sidebar')

        @include('partials.navbar')

        @yield('content')
        
    </div>

    @include('partials.footer')

    <script src="{{asset('template/js/backend-bundle.min.js')}}"></script>
    <script src="{{asset('template/js/app.js')}}"></script>

</body>
</html>
