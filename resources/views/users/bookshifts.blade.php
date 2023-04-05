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



                    <div class="card-header mb-3">
                        <h3 class="mb-0">Book Shifts</h3>
                    </div>
                    @foreach ($requests as $request)
                        <div class="shadow-lg p-3 mb-2 bg-white rounded">
                            <div class="row">
                                <div class="col">
                                    <h3 class="mb-0 h3">{{ $request->shift->title }} </h3>
                                    <span class="me-2 fs-6">
                                        <span class="text-dark  me-1 fw-semi-bold">request
                                            date</span>{{ date('j M, Y', strtotime($request->created_at)) }}
                                    </span>
                                    <span class="me-2 fs-6">
                                </div>
                                <div class="col-auto">
                                    <h4 class="text-dark  me-1 mb-0 fw-semi-bold">Location:</h4> {{ $request->shift->location }}
                                    <span class="">up to # {{ $request->shift->salary }} per hour
                                    </span>
                                    
                                </div>
                                <div class="col-auto ">
                                    @if ($request->status == 'pending')
                                        <div class="badge bg-warning">
                                            {{ $request->status }}
                                        </div>
                                    @elseif ($request->status == 'approved')
                                        <div class="badge bg-primary">
                                            {{ $request->status }}
                                        </div>
                                    @elseif ($request->status == 'rejected')
                                        <div class="badge bg-danger">
                                            {{ $request->status }}
                                        </div>
                                    @elseif ($request->status == 'completed')
                                        <div class="badge bg-success">
                                            {{ $request->status }}
                                        </div>
                                    @endif
                                    <div>
                                        27 Mar, 2023
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
