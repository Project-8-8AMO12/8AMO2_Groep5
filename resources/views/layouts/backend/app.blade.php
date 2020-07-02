<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--  Title  -->
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/magazine.css') }}" rel="stylesheet">
</head>
<body>

@if (!Request::is('backend/login') && !Request::is('backend/register'))
    @include('partials.backend.navbar')
@endif

@if (str_contains(url()->current(), '/CMS'))
    @include('partials.backend.sidebar')
@else
    @yield('content')
@endif

</body>
</html>
