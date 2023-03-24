<nav class="navbar-default navbar navbar-expand-lg">
    <a id="nav-toggle" href="#">
        <i class="fe fe-menu"></i>
    </a>
    <div class="ms-lg-3 d-none d-md-none d-lg-block">
        <!-- Form -->
        <form class="d-flex align-items-center">
            <span class="position-absolute ps-3 search-icon">
                <i class="fe fe-search"></i>
            </span>
            <input type="search" class="form-control form-control-sm ps-6"
                placeholder="Search Entire Dashboard" />
        </form>
    </div>
    <!--Navbar nav -->
    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
        <li class="dropdown stopevent">
            <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary text-muted"
                href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fe fe-bell"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg"
                aria-labelledby="dropdownNotification">
                <div class=" ">
                    <div
                        class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                        <span class="h4 mb-0">Notifications</span>
                        <a href="# " class="text-muted">
                            <span class="align-middle">
                                <i class="fe fe-settings me-1"></i>
                            </span>
                        </a>
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
                        <a href="../notification-history.html" class="text-link fw-semi-bold">
                            See all Notifications
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <!-- List -->
        <li class="dropdown ms-2">
            <a class="rounded-circle" href="#" role="button" id="dropdownUser"
                data-bs-toggle="dropdown" aria-expanded="false">
                <div class="avatar avatar-md avatar-indicators avatar-online">
                    <img alt="avatar" src="{{asset('assets/images/avatar/avatar-1.jpg') }}"
                        class="rounded-circle" />
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
</nav>