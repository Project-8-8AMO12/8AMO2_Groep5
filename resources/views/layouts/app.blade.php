<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('inc.navbar')

@if(Request::is('/') || Request::is('/home'))
    @include('inc.jumbotron')
@endif

<section class="container">
    @yield('content')
</section>

@include('inc.footer')

</body>
</html>
