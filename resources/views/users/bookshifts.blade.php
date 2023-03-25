@extends('layout.app')

@section('page_title')
    Auto assign
@endsection

@section('page_content')
    <div class="pt-5 pb-5">
        <div class="container">

            @include('users.inc.head')

            <div class="row mt-0 mt-md-4">
                <div class="col-lg-3 col-md-4 col-12">

                    @include('users.inc.nav')

                </div>
                <div class="col-lg-9 col-md-8 col-12">



                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0">TimeSheets</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-4">
                        <!-- Card -->
                        <div class="card h-100">
                            <!-- Card header -->
                            <div class="card-header d-flex align-items-center
                              justify-content-between card-header-height">
                                <h4 class="mb-0">Available Shifts</h4>
                                <a href="#" class="btn btn-outline-white btn-sm">View all</a>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- List group -->
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0 pt-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-offline">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">myGood Clinic</h4>
                                                <span class="me-2 fs-6">
                                                <span class="text-dark  me-1 fw-semi-bold">Date</span>23 April</span>
                                                <span class="me-2 fs-6">
                                            </div>
                                            <div class="col-auto">
                                            <h4 class="mb-0 h5 text-warning">Pending</h4>
                                                <span class=""> $2,900
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0 pt-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-offline">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">MyOnline Clinic</h4>
                                                <span class="me-2 fs-6">
                                                <span class="text-dark  me-1 fw-semi-bold">Date</span>23 April</span>
                                                <span class="me-2 fs-6">
                                            </div>
                                            <div class="col-auto">
                                            <h4 class="mb-0 h5 text-success">Approved</h4>
                                                <span class=""> $2,900
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0 pt-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-offline">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">Love Clinic</h4>
                                                <span class="me-2 fs-6">
                                                <span class="text-dark  me-1 fw-semi-bold">Date</span>23 April</span>
                                                <span class="me-2 fs-6">
                                            </div>
                                            <div class="col-auto">
                                            <h4 class="mb-0 h5 text-danger">Rejected</h4>
                                                <span class=""> $2,900
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <!-- List group -->
                                </ul>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
