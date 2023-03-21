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
                            <h3 class="mb-0">Configure Auto Assigning</h3>
                        </div>
                        <div class="card-body">
                            <div class="row d-lg-flex justify-content-between">
                                <div class="col-lg-9 col-md-7 col-12 mb-3 mb-lg-0">
                                    <h4 class="mb-0">Auto Assign Shift That are </h4>
                                    <p class="mb-0">(Select Duration)</p>
                                </div>
                                <div class="col-lg-3 col-md-5 col-12">
                                    <select class="selectpicker" data-width="100%">
                                        <option value="public">Any Duration</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="my-5" />

                            <div class="row d-lg-flex justify-content-between">
                                <div class="col-lg-9 col-md-7 col-12 mb-3 mb-lg-0">
                                    <h4 class="mb-0">Only Assign Me Shift That Pay expenses </h4>
                                </div>
                                <div class="col-lg-3 col-md-5 col-12">
                                    <div class="d-flex justify-content-end">
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="switchTwo" checked />
                                            <label class="form-check-label" for="switchTwo"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-5" />

                            <div class="row d-lg-flex justify-content-between">
                                <div class="col-lg-9 col-md-7 col-12 mb-3 mb-lg-0">
                                    <h4 class="mb-0">Maximum distance i'm willing to travel without being paid milage:
                                    </h4>
                                </div>
                                <div class="col-lg-3 col-md-5 col-12">
                                    <select class="selectpicker" data-width="100%">
                                        <option value="public">Max 25 miles from home</option>
                                        <option value="public">Any Miles</option>
                                    </select>
                                </div>
                            </div>

                            <hr class="my-5" />

                            <div class="row d-lg-flex justify-content-between">
                                <div class="col-lg-9 col-md-7 col-12 mb-3 mb-lg-0">
                                    <h4 class="mb-0">Do nto assing me to certian client</h4>
                                </div>
                                <div class="col-lg-3 col-md-5 col-12">
                                    <div class="d-flex justify-content-end">
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="switcwo" />
                                            <label class="form-check-label" for="switcwo"></label>
                                        </div>

                                    </div>
                                    <a style="float: right">0 Clients <span>></span> </a>
                                </div>
                            </div>

                            <hr class="my-5" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
