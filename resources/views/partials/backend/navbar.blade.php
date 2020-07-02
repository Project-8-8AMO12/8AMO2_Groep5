<nav class="bg-dark">
    <div class="container-fluid row m-0 p-0">
        <div class="col-2 p-0 d-flex">
            <a class='h4 m-auto text-white p-3' href="#">imkersLeiden</a>
        </div>
        <div class="col p-0 d-flex">
            <a class='text-white p-4 {{ Request::is('backend/dashboard') ? '_active' : '' }}' href="/backend/dashboard">Dashboard</a>
            <a class='text-white p-4 {{ Request::is('backend/CMS') ? '_active' : '' }}' href="/backend/CMS">CMS</a>
            <a class='text-white p-4 {{ Request::is('backend/settings') ? '_active' : '' }}' href="/backend/settings">Settings</a>
            <a class='text-white p-4 {{ str_contains(url()->current(), '/contact') ? '_active' : '' }}' href="/backend/contact/">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</nav>

@if(str_contains(url()->current(), '/dashboard/attendance/report'))
    <a href="#" class="btn btn-danger" target="_blank">Button</a>
@endif
