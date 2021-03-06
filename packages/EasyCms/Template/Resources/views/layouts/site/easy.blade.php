<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page_title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('meta')
    @yield('css')
</head>
<body>

@include ('tmpl::layouts.site.header')
@yield('content')
@include ('tmpl::layouts.site.footer')
<script src="{{ asset('assets/js/script.js') }}"></script>
@yield('js')
</body>
</html>
