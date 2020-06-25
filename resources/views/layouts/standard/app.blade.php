<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--  Title  -->
    <title>@yield('title')</title>

    <!--    icon -->
    <link rel="icon" href="{{url('/images/icon.png')}}">

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/zwermgezien.css') }}" rel="stylesheet">

</head>
<body>

    {{--navbar--}}
    @include('partials.standard.navbar')

    {{--jumbotron--}}
    @include('partials.standard.jumbotron')

    {{--content of the page--}}
    @yield('content')

    {{--footer--}}
    @include('partials.standard.footer')

</body>
</html>
