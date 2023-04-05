@extends('layout.admin')

@section('title')
    Admin Dashboard
@endsection


@section('content')
    <div class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-4 mb-4 d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-0 h2 fw-bold">Dashboard</h1>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                            <div>
                                <span class="fs-6 text-uppercase fw-semi-bold">Paid Out</span>
                            </div>
                            <div>
                                <span class="fe fe-credit-card fs-3 text-primary"></span>
                            </div>
                        </div>
                        <h2 class="fw-bold mb-1">
                            $10,800
                        </h2>
                        <span class="text-success fw-semi-bold"><i class="fe fe-trending-up me-1"></i>+20.9$</span>
                        <span class="ms-1 fw-medium">Number of sales</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                            <div>
                                <span class="fs-6 text-uppercase fw-semi-bold">Shit Available</span>
                            </div>
                            <div>
                                <span class=" fe fe-book-open fs-3 text-primary"></span>
                            </div>
                        </div>
                        <h2 class="fw-bold mb-1">
                            {{$data['available']}}
                        </h2>
                        <span class="text-danger fw-semi-bold">{{$data['pending_request']}}+</span>
                        <span class="ms-1 fw-medium">Pending Request</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                            <div>
                                <span class="fs-6 text-uppercase fw-semi-bold">Total Shift</span>
                            </div>
                            <div>
                                <span class=" fe fe-check-circle fs-3 text-primary"></span>
                            </div>
                        </div>
                        <h2 class="fw-bold mb-1">
                            {{$data['total_shift']}}
                        </h2>
                        <span class="text-success fw-semi-bold"><i class="fe fe-trending-up me-1"></i>+{{$data['completed']}}</span>
                        <span class="ms-1 fw-medium">Completed</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                            <div>
                                <span class="fs-6 text-uppercase fw-semi-bold">Worker</span>
                            </div>
                            <div>
                                <span class=" fe fe-user-check fs-3 text-primary"></span>
                            </div>
                        </div>
                        <h2 class="fw-bold mb-1">
                            {{$data['workers']}}
                        </h2>
                        <span class="text-success fw-semi-bold"><i class="fe fe-trending-up me-1"></i>+{{$data['active_workers']}}</span>
                        <span class="ms-1 fw-medium">Active</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card header -->
                    <div
                        class="card-header align-items-center card-header-height d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="mb-0">Pay Out</h4>
                        </div>
                        <div>
                            <div class="dropdown dropstart">
                                <a class="text-muted text-decoration-none" href="#" role="button"
                                    id="courseDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="courseDropdown1">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#"><i
                                            class="fe fe-external-link dropdown-item-icon "></i>Export</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fe fe-mail dropdown-item-icon "></i>Email
                                        Report</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fe fe-download dropdown-item-icon "></i>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <!-- Earning chart -->
                        <div id="earning" class="apex-charts"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card header -->
                    <div
                        class="card-header align-items-center card-header-height  d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="mb-0">Traffic</h4>
                        </div>
                        <div>
                            <div class="dropdown dropstart">
                                <a class="text-muted text-decoration-none" href="#" role="button"
                                    id="courseDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="courseDropdown2">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#"><i
                                            class="fe fe-external-link dropdown-item-icon "></i>Export</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fe fe-mail dropdown-item-icon "></i>Email
                                        Report</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fe fe-download dropdown-item-icon "></i>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <div id="traffic" class="apex-charts d-flex justify-content-center"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between card-header-height">
                        <h4 class="mb-0">Recent Users</h4>
                        <a href="/admin/active_users" class="btn btn-outline-white btn-sm">View all</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach ($users as $user)
                            <li class="list-group-item px-0 pt-2 ">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-md avatar-indicators {{ ($user->status == 'active') ? 'avatar-online' : 'avatar-offline' }}">
                                            <img alt="avatar" src="{{ asset('assets/images/user/user.png') }} "
                                                class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col ms-n3">
                                        <h4 class="mb-0 h5">{{$user->name}} </h4>
                                        <span class="me-2 fs-6">
                                            {{$user->email}} </span>
                                        <span class="me-2 fs-6">{{$user->phone}} </span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between card-header-height">
                        <h4 class="mb-0">Recent Pay Out</h4>
                        <a href="#" class="btn btn-outline-white btn-sm">View all</a>
                    </div>
                    <div class="card-body">
                        <div class="card mb-4 card-hover">
                            <div class="row  g-0">
                                <a class="col-3 col-md-3 col-xl-3 col-lg-3 align-middle bg-cover bg-danger text-white d-flex align-items-center justify-content-center text-center rounded"
                                    href="#">
                                    <div class="" >
                                        <h3 class="mb-0 text-large fw-bold text-white" >12</h3>
                                        <p class="mt-0 mb-0">Aug Tue</p>
                                    </div>
                                </a>
                                <div class="col-lg-9 col-md-9 col-9">
                                    <div class="card-body p-2">
                                        <h5 class="mb-2 text-truncate-line-1 "><a href="#"
                                                class="text-inherit">8:00 - 12:00</a></h5>
                                        <div class="row align-items-center g-0">
                                            <div class="col">
                                                <span class=" text-truncate-line-1">BREAK: 60 min (PAID)</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-muted bookmark">
                                                    $24/h
                                                </a>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4 card-hover">
                            <div class="row  g-0">
                                <a class="col-3 col-md-3 col-xl-3 col-lg-3 align-middle bg-cover bg-success text-white d-flex align-items-center justify-content-center text-center rounded"
                                    href="#">
                                    <div class="" >
                                        <h3 class="mb-0 text-large fw-bold text-white" >12</h3>
                                        <p class="mt-0 mb-0">Aug Tue</p>
                                    </div>
                                </a>
                                <div class="col-lg-9 col-md-9 col-9">
                                    <div class="card-body p-2">
                                        <h5 class="mb-2 text-truncate-line-1 "><a href="#"
                                                class="text-inherit">8:00 - 12:00</a></h5>
                                        <div class="row align-items-center g-0">
                                            <div class="col">
                                                <span class=" text-truncate-line-1">BREAK: 60 min (PAID)</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-muted bookmark">
                                                    $24/h
                                                </a>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4 card-hover">
                            <div class="row  g-0">
                                <a class="col-3 col-md-3 col-xl-3 col-lg-3 align-middle bg-cover bg-warning text-white d-flex align-items-center justify-content-center text-center rounded"
                                    href="#">
                                    <div class="" >
                                        <h3 class="mb-0 text-large fw-bold text-white" >12</h3>
                                        <p class="mt-0 mb-0">Aug Tue</p>
                                    </div>
                                </a>
                                <div class="col-lg-9 col-md-9 col-9">
                                    <div class="card-body p-2">
                                        <h5 class="mb-2 text-truncate-line-1 "><a href="#"
                                                class="text-inherit">8:00 - 12:00</a></h5>
                                        <div class="row align-items-center g-0">
                                            <div class="col">
                                                <span class=" text-truncate-line-1">BREAK: 60 min (PAID)</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-muted bookmark">
                                                    $24/h
                                                </a>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-4">
                <div class="card h-100">
                    <div class="card-header card-header-height d-flex align-items-center">
                        <h4 class="mb-0">Notifications
                        </h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush list-timeline-activity">
                            <li class="list-group-item px-0 pt-0 border-0 mb-2">
                                <div class="row">
                                    <div class="">
                                        <h4 class="mb-0 h5">Dianna Smiley</h4>
                                        <p class="mb-1">Just buy the courses”Build React Application
                                            Tutorial”</p>
                                        <span class="fs-6">2m ago</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
