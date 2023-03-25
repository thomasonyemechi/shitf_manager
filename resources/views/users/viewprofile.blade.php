@extends('layout.app')

@section('page_title')
    My Dashboard
@endsection

@section('page_content')
    <div class="pt-5 pb-5">
        <div class="container">

            @include('users.inc.head')

            <div class="row mt-0 mt-md-4">
                <div class="col-lg-3 col-md-4 col-12">

                    @include('users.inc.nav')

                </div>
                <div class="col-xl-8 col-lg-6 col-md-6 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="text-center">
                            <div class="position-relative">
                                <img src="../../assets/images/avatar/avatar-12.jpg" class="rounded-circle avatar-xl mb-3" alt="" />
                                <a href="#" class="position-absolute mt-10 ms-n5">
                                    <span class="status bg-success"></span>
                                </a>
                            </div>
                            <h4 class="mb-0">Esther Howard</h4>
                            <p class="mb-0">
                                <i class="fe fe-map-pin me-1 fs-6"></i>United States
                            </p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 mt-6">
                            <span>Full Name</span>
                            <span class="text-dark">Esther Howard</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <span>date of birth</span>
                            <span> 17 Aug, 2020 </span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <span>Address</span>
                            <span class="text-dark"> texas,United states </span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <span>Country</span>
                            <span class="text-dark"> United states </span>
                        </div>
                        <div class="d-flex justify-content-between pt-2">
                            <span>Account Name</span>
                            <span class="text-dark"> Esther Howlard </span>
                        </div>
                        <div class="d-flex justify-content-between pt-2">
                            <span>Account Number</span>
                            <span class="text-dark"> 3245367542 </span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <span>Bank Name</span>
                            <span class="text-dark"> Westafrica Bank </span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
