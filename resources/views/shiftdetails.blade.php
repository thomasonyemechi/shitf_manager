@extends('layout.app')

@section('page_title')
    Shift Details
@endsection


@section('page_content')
    <div class="bg-primary py-4 py-lg-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div>
                        <h1 class="mb-0 text-white display-4">Shift Details</h1>
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
                            <h4 class="mb-3 mb-lg-0"><a href="/searcshift">Back to Shifts</a> </h4>
                        </div>
                        <div class="d-inline-flex col-md-6 col-lg-4 col-xl-3 ">
                            @if (auth()->user()->id)
                                @if ($details['status'] == 'pending')
                                    <button class="btn btn-block btn-warning disabled " style="width: 100%">Request
                                        Sent</button>
                                @elseif ($details['status'] == 'active')
                                    <button class="btn btn-block btn-success " style="width: 100%">Request Approved</button>
                                @else
                                    <button class="btn btn-block btn-primary openModal " style="width: 100%">Request
                                        Shift</button>
                                @endif
                            @else
                                <button class="btn btn-block btn-primary openModal " style="width: 100%">Request
                                    Shift</button>
                            @endif
                        </div>
                    </div>
                </div>


                <div class="col-xl-9 col-lg-9 col-md-8 col-12">
                    <div class="card  mb-4">
                        <div class="card-body">
                            <div class="mb-5 mt-3">
                                <h1 class="fw-bold">{{ $shift->title }} Role </h1>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <div>
                                            <h4 class="mb-0 fw-bold">Date Posted</h4>
                                            <p class="mb-0 fs-5">{{ date('j M, Y', strtotime($shift->created_at)) }}</p>
                                        </div>
                                    </div>
                                </div>

                                <hr class="d-md-none d-sm-block">


                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <div>
                                            <h4 class="mb-0 fw-bold">Location </h4>
                                            <p class="mb-0 fs-5">{{ $shift->location }}</p>
                                        </div>
                                    </div>
                                </div>

                                <hr class="d-md-none d-sm-block">

                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <div>
                                            <h4 class="mb-0 fw-bold">Discipline</h4>
                                            <p class="mb-0 fs-5">{{ $shift->details }}</p>
                                        </div>
                                    </div>
                                </div>

                                <hr class="mt-3">

                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <div>
                                            <h4 class="mb-0 fw-bold">Salary</h4>
                                            <p class="mb-0 fs-5">Up to £{{ $shift->salary }} per hour</p>
                                        </div>
                                    </div>
                                </div>

                                <hr class="d-md-none d-sm-block">

                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <div>
                                            <h4 class="mb-0 fw-bold">Reference</h4>
                                            <p class="mb-0 fs-5">{{ $shift->reference }}</p>
                                        </div>
                                    </div>
                                </div>

                                <hr class="d-md-none d-sm-block">

                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <div>
                                            <h4 class="mb-0 fw-bold">Job Type</h4>
                                            <p class="mb-0 fs-5">{{ $shift->type }}</p>
                                        </div>
                                    </div>
                                </div>




                                <hr class="mt-3">

                            </div>



                            <div class="mt-3">
                                <h3 class="fw-semi-bold">Job Description</h3>

                                <article class="desc">
                                    {!! $shift->description !!}
                                </article>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-4 col-12 mb-4 mb-lg-0">

                    <div class="card border-0 mb-3">
                        <div class="card-body">
                            <h3 class="mb-2">Share This Shift</h3>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn-social btn-social-outline btn-facebook">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="#" class="btn-social btn-social-outline btn-twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn-social btn-social-outline btn-linkedin">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="#" class="btn-social btn-social-outline btn-github">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="card  border-0 mb-3">
                        <div class="p-5">
                            <div class="d-flex justify-content-start">
                                <div class="display-6 fw-bold text-primary" style="text-decoration: underline">Other
                                    Shifts</div>
                            </div>

                            @foreach ($shifts as $shit)
                                <div class="mb-2 mt-3">
                                    <h4 class="fw-semi-bold mb-1">{{ $shift->title }} </h4>
                                    <div class="">
                                        <div>
                                            <i class="fe fe-map-pin me-2 text-primary"></i>{{ $shift->location }}
                                        </div>
                                        <div>
                                            <i class="fe fe-clock me-2 text-primary"></i>{{ $shift->type }}
                                        </div>
                                        <div>
                                            <i class="fe fe-credit-card me-2 text-primary"></i>Up to £{{ $shift->salary }}
                                            per hour
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endforeach


                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="accRequestModal" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center ">

                    <div class="display-6 fw-bold d-block ">Request this Shift</div>
                    <ul class="mb-2 list-inline">
                        Up to £{{ $shift->salary }} per hour | {{ $shift->createdby->name }}
                        </li>
                    </ul>

                    <div class="">
                        <i class="bold text-xs">Posted
                            {{ date('j M, Y', strtotime($shift->created_at)) }}</i>
                    </div>
                    <div class=" mt-2 justify-content-between">
                        <form action="/requestShift" method="post">@csrf
                            <input type="hidden" name="shift_id" value="{{ $shift->id }}">
                            <button type="submit" class="btn btn-primary">Send Request</button>
                            <button type="button" class="btn btn-outline-white" data-bs-dismiss="modal">
                                Cancel
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('.openModal').on('click', function() {
                data = $(this).data('data');
                modal = $('#accRequestModal');
                modal.modal('show')
            });
        })
    </script>
@endpush
