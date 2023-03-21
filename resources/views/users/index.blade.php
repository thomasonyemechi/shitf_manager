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
                <div class="col-lg-9 col-md-8 col-12">

                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12">
                            <!-- Card -->
                            <div class="card mb-4">
                                <div class="p-4">
                                    <span class="fs-6 text-uppercase fw-semi-bold">Revenue</span>
                                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
                                        $467.34
                                    </h2>
                                    <span class="d-flex justify-content-between align-items-center">
                                        <span>Earning this month</span>
                                        <span class="badge bg-success ms-2">$203.23</span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="card mb-4">
                                <div class="p-4">
                                    <span class="fs-6 text-uppercase fw-semi-bold">students Enrollments</span>
                                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
                                        12,000
                                    </h2>
                                    <span class="d-flex justify-content-between align-items-center">
                                        <span>New this month</span>
                                        <span class="badge bg-info ms-2">120+</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="card mb-4">
                                <div class="p-4">
                                    <span class="fs-6 text-uppercase fw-semi-bold">Courses Rating</span>
                                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
                                        4.80
                                    </h2>
                                    <span class="d-flex justify-content-between align-items-center">
                                        <span>Rating this month</span>
                                        <span class="badge bg-warning ms-2">10+</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="card mb-4">
						<div class="card-header">
							<h3 class="h4 mb-0">Earnings</h3>
						</div>
						<div class="card-body">
							<div id="earning" class="apex-charts"></div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
@endsection
