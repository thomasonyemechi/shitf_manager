@extends('layout.app')

@section('page_title')
    Search for shifts
@endsection


@section('page_content')
    <div class="bg-primary py-4 py-lg-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div>
                        <h1 class="mb-0 text-white display-4">All Available Shifts</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="py-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                    <div class="row d-lg-flex justify-content-between align-items-center">
                        <div class="col-md-6 col-lg-8 col-xl-9 ">
                            <h4 class="mb-3 mb-lg-0">Displaying 9 out of 68 Shifts</h4>
                        </div>
                        <div class="d-inline-flex col-md-6 col-lg-4 col-xl-3 ">
                            <select class="selectpicker" data-width="100%">
                                <option value="">Sort by</option>
                                <option value="Newest">Newest</option>
                                <option value="Highest Paid">Highest Paid</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-12 mb-4 mb-lg-0">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Filter</h4>
                        </div>
                        <div class="card-body">
                            <span class="dropdown-header px-0 mb-2"> Job Title</span>
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="title1">
                                <label class="form-check-label" for="title1">Health Care Assistant Jobs</label>
                            </div>
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="title2">
                                <label class="form-check-label" for="title2">Nurse Jobs</label>
                            </div>
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="title3">
                                <label class="form-check-label" for="title3">Support Worker Jobs</label>
                            </div>
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="title4">
                                <label class="form-check-label" for="title4">Operating Department Practitioner</label>
                            </div>


                        </div>

                        <div class="card-body">
                            <span class="dropdown-header px-0 mb-2">Settings </span>
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="title5">
                                <label class="form-check-label" for="title5">Care Home</label>
                            </div>
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="title6">
                                <label class="form-check-label" for="title6">Community</label>
                            </div>
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="title7">
                                <label class="form-check-label" for="title7">Hospital</label>
                            </div>
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="title8">
                                <label class="form-check-label" for="title8">Prison</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <span class="dropdown-header px-0 mb-2">Job Location</span>
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="title9">
                                <label class="form-check-label" for="title9">United Kingdom</label>
                            </div>

                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="title0">
                                <label class="form-check-label" for="title0">Greater Longon</label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-9 col-md-8 col-12">
                    <div class="tab-content">

                        <div class="tab-pane fade show active pb-4" id="tabPaneList" role="tabpanel"
                            aria-labelledby="tabPaneList">
                            <!-- Card -->

                            <div class="row">
                                @for ($i = 1; $i <= 20; $i++)
                                    <div class="col-md-6 col-12">
                                        <div class="card mb-4  card-hover">
                                            <div class="row g-0">
                                                <div class="card-body">
                                                    <h4 class="mb-2 text-truncate-line-2 "><a href="#"
                                                            class="text-inherit">Vue.js Components
                                                            Fundamentals</a>
                                                    </h4>
                                                    <ul class="mb-2 list-inline">
                                                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>Peterborough <span>|</span>
                                                            Up to £15.72 per hour</li>
                                                    </ul>

                                                    <p class="text-small text-truncate-line-5">
                                                        Deliver person-centred care as a Registered Nurse Bring your nursing
                                                        training to life and make a difference with Newcross Healthcare.
                                                        Join our HealthForce community as a Registered Nurse and get paid up to £32.82 
                                                    </p>

                                                    <div class="d-flex justify-content-start ">
                                                        <i class="bold text-xs" >Posted 28 minutes ago</i>
                                                    </div>
                                                    <div class=" mt-2 justify-content-between" >
                                                        <a href="#" class="btn btm-xs btn-success mb-2">Accept Shift</a>
                                                        <a href="#" class="btn btm-xs btn-primary mb-2">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
