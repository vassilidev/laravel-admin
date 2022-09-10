<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
     id="sidenavAccordion">
    <!-- Sidenav Toggle Button-->
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button>
    <!-- Navbar Brand-->
    <!-- * * Tip * * You can use text or an image for your navbar brand.-->
    <!-- * * * * * * When using an image, we recommend the SVG format.-->
    <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
    <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="{{ route('panel.dashboard') }}">{{ config('app.name') }}</a>
    <!-- Navbar Items-->
    <ul class="navbar-nav align-items-center ms-auto">
        <!-- User Dropdown-->
        <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
               href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false">
                <img class="img-fluid" src="{{ asset('assets/img/illustrations/profiles/profile-4.png') }}"/>
            </a>
            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                 aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">
                    <img class="dropdown-user-img"
                         src="{{ asset('assets/img/illustrations/profiles/profile-4.png') }}"/>
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name">{{ Auth::user()->name }}</div>
                        <div class="dropdown-user-details-email">{{ Auth::user()->email }}</div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#!">
                    <div class="dropdown-item-icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    Account
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a class="dropdown-item text-danger" href="javascript:void(0)"
                       onclick="this.closest('form').submit()">
                        <div class="dropdown-item-icon text-danger">
                            <i class="fas fa-sign-out"></i>
                        </div>
                        Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
