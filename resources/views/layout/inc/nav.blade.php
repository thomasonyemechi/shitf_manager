@php
    $logged = 0;
@endphp

<nav class="navbar navbar-expand-lg navbar-default">
    <div class="container-fluid px-0">
        <a class="navbar-brand align-middle" href="/">

            <h2 class="text-primary mt-2 fw-bold align-middle" >ShiftMG</h2>
            
            {{-- <img src="../assets/images/brand/logo/logo.svg" alt="" /></a> --}}
        <!-- Mobile view nav wrap -->

        @if (!Auth::user())
            <ul class="navbar-nav navbar-right-wrap ms-auto d-lg-none d-flex nav-top-wrap">
                <li class="dropdown d-inline-block stopevent">
                    <button class="btn btn-outline-white btn-xs me-2" style="border: 1px solid #036;border-radius: 1px;"
                        href="/login">
                        <span>Login</span>
                    </button>
                </li>
                <li class="dropdown d-inline-block stopevent">
                    <a class="btn btn-primary btn-xs" href="/signup" >
                        <span>Sign up</span>
                    </a>
                </li>
            </ul>
        @else
            <ul class="navbar-nav navbar-right-wrap ms-auto d-lg-none d-flex nav-top-wrap">
                <li class="dropdown stopevent">
                    <a class="btn btn-light btn-icon rounded-circle text-muted indicator indicator-primary"
                        href="#" role="button" data-bs-toggle="dropdown">
                        <i class="fe fe-bell"> </i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end shadow">
                        <div>
                            <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0">Notifications</span>
                                <a href="# " class="text-muted"><span class="align-middle"><i
                                            class="fe fe-settings me-1"></i></span></a>
                            </div>
                            <ul class="list-group list-group-flush notification-list-scroll">
                                <li class="list-group-item bg-light">
                                    <div class="row">
                                        <div class="col">
                                            <a href="#" class="text-body">
                                                <div class="d-flex">
                                                    <div class="ms-3">
                                                        <h5 class="fw-bold mb-1">New Booking Available</h5>
                                                        <p class="mb-3">
                                                            New booking available with 24 peters -rs for fri 17 mar 2023
                                                            21:30niew details now
                                                            to accept shift
                                                        </p>
                                                        <span class="fs-6 text-muted">
                                                            <span class="ms-1">2:19 PM</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-auto text-center me-2">
                                            <a href="#!" class="badge-dot bg-info" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Mark as read">
                                            </a>
                                            <div>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Remove">
                                                    <i class="fe fe-x text-muted"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="border-top px-3 pt-3 pb-0">
                                <a href="n#" class="text-link fw-semi-bold">See all
                                    Notifications</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown ms-2">
                    <a class="rounded-circle" href="#" role="button" data-bs-toggle="dropdown">
                        <div class="avatar avatar-md avatar-indicators avatar-online">
                            <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end shadow">
                        <div class="dropdown-item">
                            <div class="d-flex">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg"
                                        class="rounded-circle" />
                                </div>
                                <div class="ms-3 lh-1">
                                    <h5 class="mb-1">Bril John</h5>
                                    <p class="mb-0 text-muted">john@doe.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled">

                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fe fe-user me-2"></i>Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fe fe-settings me-2"></i>Settings
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fe fe-power me-2"></i>Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        @endif

        <!-- Button -->
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="icon-bar top-bar mt-0"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbar-default">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#">
                        About Us
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#">
                        Contact
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLanding" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Jobs
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarLanding">
                        <li>
                            <h4 class="dropdown-header">Available</h4>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">
                                Support Worker
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-horizontal fs-3"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action border-0" href="#">
                                <div class="d-flex align-items-center">
                                    <i class="fe fe-file-text fs-3 text-primary"></i>
                                    <div class="ms-3">
                                        <h5 class="mb-0">Documentations</h5>
                                        <p class="mb-0 fs-6">
                                            Browse the all documentation
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action border-0"
                                href="#">
                                <div class="d-flex align-items-center">
                                    <i class="fe fe-layers fs-3 text-primary"></i>
                                    <div class="ms-3">
                                        <h5 class="mb-0">
                                            Changelog <span class="text-primary ms-1">v2.1.0</span>
                                        </h5>
                                        <p class="mb-0 fs-6">See what's new</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li> --}}
            </ul>
            <form class="mt-3 mt-lg-0 ms-lg-3 d-flex align-items-center">
                <span class="position-absolute ps-3 search-icon">
                    <i class="fe fe-search"></i>
                </span>
                <input type="search" class="form-control ps-6" placeholder="Search For Shifts" />
            </form>
            @if (!Auth::user())
                <ul class="navbar-nav navbar-right-wrap ms-auto d-none d-lg-block">

                    <li class="dropdown d-inline-block stopevent">
                        <a class="btn btn-outline-white btn-sm" style="border: 1px solid #036;border-radius: 1px;"
                            href="/login">
                            <span><big>Login</big></span>
                        </a>
                    </li>
                    <li class="dropdown d-inline-block stopevent m-1">
                        <a class="btn btn-primary btn-sm" style="border-radius: 1px;" href="/signup">
                            <span><big>Sign up</big></span>
                        </a>
                    </li>

                </ul>
            @else
                <ul class="navbar-nav navbar-right-wrap ms-auto d-none d-lg-block">
                    <li class="dropdown d-inline-block stopevent">
                        <a class="btn btn-light btn-icon rounded-circle text-muted indicator indicator-primary"
                            href="#" role="button" id="dropdownNotificationSecond" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-bell"> </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg"
                            aria-labelledby="dropdownNotificationSecond">
                            <div>
                                <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                                    <span class="h5 mb-0">Notifications</span>
                                </div>
                                <ul class="list-group list-group-flush notification-list-scroll ">
                                    <li class="list-group-item bg-light">
                                        <div class="row">
                                            <div class="">
                                                <a class="text-body" href="#">
                                                    <div class="d-flex">
                                                        <div class="ms-3">
                                                            <h5 class="fw-bold mb-1">New Booking Available</h5>
                                                            <p class="mb-3">
                                                                New booking available with 24 peters -rs for fri 17 mar
                                                                2023 21:30niew details now
                                                                to accept shift
                                                            </p>
                                                            <span class="fs-6 text-muted">
                                                                <span class="ms-1">2:19 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="border-top px-3 pt-3 pb-0">
                                    <a href="#" class="text-link fw-semi-bold">See all
                                        Notifications</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown ms-2 d-inline-block">
                        <a class="rounded-circle" href="#" data-bs-toggle="dropdown" data-bs-display="static"
                            aria-expanded="false">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg"
                                    class="rounded-circle" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="dropdown-item">
                                <div class="d-flex">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class="mb-1">Bril John</h5>
                                        <p class="mb-0 text-muted">john@doe.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-user me-2"></i>Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-settings me-2"></i>Settings
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-power me-2"></i>Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            @endif

        </div>
    </div>
</nav>
