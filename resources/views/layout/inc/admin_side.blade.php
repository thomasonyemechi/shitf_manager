<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/brand/logo/logo-inverse.svg') }}" alt="" />
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link  " href="/admin">
                    <i class="nav-icon fe fe-home me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="/admin/createshift">
                    <i class="nav-icon fe fe-file-plus me-2"></i> Create New Shift
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="#">
                    <i class="nav-icon fe fe-git-pull-request me-2"></i> View Shift Request
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="#">
                    <i class="nav-icon fe fe-check-circle me-2"></i> Approved Shift
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="#">
                    <i class="nav-icon fe fe-check-square me-2"></i> Completed Shift
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link  " href="#">
                    <i class="nav-icon fe fe-credit-card me-2"></i> Payout
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse"
                    data-bs-target="#usernav" aria-expanded="false" aria-controls="usernav">
                    <i class="nav-icon fe fe-user me-2"></i> User Management
                </a>
                <div id="usernav" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="#">
                                All Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">
                                Search User
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
    
        </ul>
    </div>
</nav>