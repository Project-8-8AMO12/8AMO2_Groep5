<section class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block imkersBlue sidebar p-0">
            <div class="sidebar-sticky _sidebar-height">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class='nav-link text-white {{ Request::is('backend/dashboard/CMS/pages') ? 'imkersYellow' : '' }}' href="/backend/dashboard/CMS/pages">Pages</a>
                    </li>
                    <li class="nav-item">
                        <a class='nav-link text-white {{ Request::is('backend/dashboard/CMS/partials') ? '_active' : '' }}' href="/backend/dashboard/CMS/partials">Partials</a>
                    </li>
                    <li class="nav-item">
                        <a class='nav-link text-white {{ Request::is('backend/dashboard/CMS/content') ? '_active' : '' }}' href="/backend/dashboard/CMS/content">Content</a>
                    </li>
                    <li class="nav-item">
                        <a class='nav-link text-white {{ Request::is('backend/dashboard/CMS/assets') ? '_active' : '' }}' href="/backend/dashboard/CMS/assets">Assets</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="col-10 p-0">
            @yield('content')
        </div>
    </div>
</section>
