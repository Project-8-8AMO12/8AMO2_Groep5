<section class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block imkersBlue sidebar p-0">
            <div class="sidebar-sticky _sidebar-height">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class='nav-link text-white {{ Request::is('backend/CMS/pages') ? 'imkersYellow' : '' }}' href="/backend/CMS/pages">Pages</a>
                    </li>
                    <li class="nav-item">
                        <a class='nav-link text-white {{ Request::is('backend/CMS/partials') ? '_active' : '' }}' href="/backend/CMS/partials">Partials</a>
                    </li>
                    <li class="nav-item">
                        <a class='nav-link text-white {{ Request::is('backend/CMS/content') ? '_active' : '' }}' href="/backend/CMS/content">Content</a>
                    </li>
                    <li class="nav-item">
                        <a class='nav-link text-white {{ Request::is('backend/CMS/assets') ? '_active' : '' }}' href="/backend/CMS/assets">Assets</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="col-10 p-0">
            @yield('content')
        </div>
    </div>
</section>
