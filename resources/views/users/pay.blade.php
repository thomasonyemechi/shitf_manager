@extends('layout.app')

@section('page_title')
    My Pay
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
                    <div class="card rounded-3">
                        <div class="card-header border-bottom-0 p-0">
                            <div>
                                <ul class="nav nav-lb-tab" id="tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="table-tab" data-bs-toggle="pill" href="#table"
                                            role="tab" aria-controls="table" aria-selected="true">Withdrawals</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="description-tab" data-bs-toggle="pill" href="#description"
                                            role="tab" aria-controls="description" aria-selected="false">Payslips</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="tabContent">
                                <div class="tab-pane fade show active" id="table" role="tabpanel"
                                    aria-labelledby="table-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="align-items-center">
                                                    <h2 class="mt-4 fw-bold text-center mb-1 h1 lh-1">
                                                        $467777.34
                                                    </h2>

                                                    <form class="row " action="">
                                                        <div class="col-md-12 d-flex justify-content-center">
                                                            <span class="text-sm mb-5 text-muted text-center">Total withdrawable
                                                                ($400)</span>
                                                        </div>
                                                        <div class="col-md-12 d-flex mb-3 justify-content-center">
                                                            <input type="number" class="form-control text-center" style="width: 74%">
                                                        </div>
                                                        <div class="col-md-12 d-flex justify-content-center">
                                                            <a href="#" class="btn btn-primary mb-2  ">withdraw</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="description" role="tabpanel"
                                    aria-labelledby="description-tab">
                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
