{{--<nav class="bg-dark">--}}
{{--    <div class="px-5 d-flex">--}}
{{--        <a class='ml-5 text-white p-3 {{ Request::is('backend/dashboard') ? '_active' : '' }}' href="/backend/dashboard">Dashboard</a>--}}
{{--        <a class='text-white p-3 {{ Request::is('backend/CMS') ? '_active' : '' }}' href="/backend/CMS">CMS</a>--}}
{{--        <a class='text-white p-3 {{ Request::is('backend/magazine') ? '_active' : '' }}' href="/backend/magazine">Magazine</a>--}}
{{--        <a class='text-white p-3 {{ Request::is('backend/settings') ? '_active' : '' }}' href="/backend/settings">Settings</a>--}}
{{--        <!-- Authentication Links -->--}}
{{--        @guest--}}
{{--            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--            @if (Route::has('register'))--}}
{{--                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--            @endif--}}
{{--        @else--}}
{{--            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--            </a>--}}

{{--            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                   onclick="event.preventDefault();--}}
{{--                                             document.getElementById('logout-form').submit();">--}}
{{--                    {{ __('Logout') }}--}}
{{--                </a>--}}

{{--                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                    @csrf--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        @endguest--}}
{{--    </div>--}}
{{--</nav>--}}

<nav class="bg-dark">
    <div class="container-fluid row m-0 p-0">
        <div class="col-2 p-0 d-flex">
            <a class='h4 m-auto text-white p-3' href="#">imkersLeiden</a>
        </div>
        <div class="col p-0 d-flex">
            <a class='text-white p-4 {{ str_contains(url()->current(), '/dashboard') ? '_active' : '' }}' href="/backend/dashboard">Dashboard</a>
            <a class='text-white p-4 {{ str_contains(url()->current(), '/CMS') ? '_active' : '' }}' href="/backend/CMS">CMS</a>
            <a class='text-white p-4 {{ str_contains(url()->current(), '/settings') ? '_active' : '' }}' href="/backend/settings">Settings</a>
        </div>
    </div>
</nav>

@if(str_contains(url()->current(), '/dashboard/attendance/report'))
    <a href="#" class="btn btn-danger" target="_blank">Button</a>
@endif
