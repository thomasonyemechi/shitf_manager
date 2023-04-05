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
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<!-- Card body -->
								<div class="p-4">
									<span class="icon-shape icon-sm bg-light-primary text-dark-primary rounded-3"><i
											class="fe fe-clock"></i></span>
									<h2 class="h1 fw-bold mb-0 mt-4 lh-1">100hrs</h2>
									<p  >Worked</p>
									<div class="progress bg-light-primary" style="height: 2px">
										<div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Card body -->
							<div class="card mb-4">
								<!-- Card body -->
								<div class="p-4">
									<span class="icon-shape icon-sm bg-light-danger text-dark-danger rounded-3"><i
											class="fe fe-dollar-sign"></i></span>
									<h2 class="h1 fw-bold mb-0 mt-4 lh-1">
										$3,800
									</h2>
									<p>Earned</p>
									<div class="progress bg-light-danger" style="height: 2px">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45"
											aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="card mb-4">
								<div class="p-4">
									<span class="icon-shape icon-sm bg-light-warning text-dark-warning rounded-3"><i
											class="fe fe-send"></i></span>
									<h2 class="h1 fw-bold mb-0 mt-4 lh-1">
										89
									</h2>
									<p>Request Sent</p>
									<div class="progress bg-light-warning" style="height: 2px">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35"
											aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-lg-3 col-md-6 col-12">
							<!-- Card body -->
							<div class="card mb-4">
								<!-- Card body -->
								<div class="p-4">
									<span class="icon-shape icon-sm bg-light-success text-dark-success rounded-3"><i
											class="fe fe-check-circle"></i></span>
									<h2 class="h1 fw-bold mb-0 mt-4 lh-1">
										10
									</h2>
									<p>Completed Shifts</p>
									<div class="progress bg-light-success" style="height: 2px">
										<div class="progress-bar bg-success" role="progressbar" style="width: 35%" aria-valuenow="35"
											aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h3 class="h4 mb-0">Finished Shift</h3>
                                </div>
                                <div class="card-body">
                                    <div id="orderColumn" class="apex-charts"></div>
                                </div>
				            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h3 class="h4 mb-0">Total Earning</h3>
                                </div>
                                <div class="card-body">
                                    <div id="earning" class="apex-charts"></div>
                                </div>
				            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
						<!-- Card header -->
						<div class="card-header border-bottom-0">
							<h3 class="h4 mb-0">Today's Shift</h3>
						</div>
						<!-- Table -->
						<div class="table-responsive border-0">
							<table class="table mb-0">
								<!-- Table head -->
								<thead class="table-light">
									<tr>
										<th scope="col" class="border-0">Shift</th>
										<th scope="col" class="border-0">Company</th>
										<th scope="col" class="border-0">Duration</th>
										<th scope="col" class="border-0">Start-Time</th>
                                        <th scope="col" class="border-0">End-Time</th>
                                        <th scope="col" class="border-0">Amount</th>
                                        <th scope="col" class="border-0">Action</th>
									</tr>
								</thead>
								<!-- Table body -->
								<tbody>
									<tr>
										<td class="align-middle border-top-0">Shift Title</td>
										<td class="align-middle border-top-0">Good Clinic</td>
										<td class="align-middle border-top-0">Part-time</td>
                                        <td class="align-middle border-top-0">Morning</td>
                                        <td class="align-middle border-top-0">Evening</td>
                                        <td class="align-middle border-top-0">$5,500</td>
                                        <td class="align-middle border-top-0"><a class="" href="/user/availability"><i class=" "></i>View</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
@endsection
