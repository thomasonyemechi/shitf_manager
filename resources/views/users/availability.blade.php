@extends('layout.app')

@section('page_title')
    Manage Availability
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
                       
                        <div class="col-md-8">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h3 class="h4 mb-0">My Availability</h3>
                                </div>
                                <div class="card-body">
                                    @for ($i = 1; $i <= 7; $i++)
                                        <div class="card bg-info mb-4">
                                            <div class="card-body  p-3 text-white ">
                                                <div class="d-md-flex  mb-2">
                                                    <div class="">
                                                        <h4 class="fw-bold mb-1 text-white">Tuesday 21, March 2023</h4>
                                                        <p class="text-uppercase fs-6 fw-semi-bold mb-0"><span
                                                                class="text-white"> 12:30 - 4:30 </span> <span
                                                                class="ms-3">(Available)</span></p>
                                                    </div>
                                                </div>
                                                <p class="mb-0 fs-4">Aliquam pulvinar eros a dictur vitae diam imperdiet,
                                                    ornare
                                                    turpis vequet
                                                    elit nec, imperdiet lectuna liquam qs.
                                                </p>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h3 class="h4 mb-0">Set Availability</h3>
                                </div>
                                <div class="card-body">
                                    <div class=" animate arrowTop arrowLeft open" tabindex="-1"
                                        style="top: 134px; left: 460.031px; right: auto;">
                                        <div class="flatpickr-innerContainer">
                                            <div class="flatpickr-rContainer">
                                                <div class="flatpickr-weekdays">
                                                    <div class="flatpickr-weekdaycontainer">
                                                        <span class="flatpickr-weekday">
                                                            Sun</span><span class="flatpickr-weekday">Mon</span><span
                                                            class="flatpickr-weekday">Tue</span><span
                                                            class="flatpickr-weekday">Wed</span><span
                                                            class="flatpickr-weekday">Thu</span><span
                                                            class="flatpickr-weekday">Fri</span><span
                                                            class="flatpickr-weekday">Sat
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flatpickr-days" tabindex="-1">
                                                    <div class="dayContainer">
                                                        @php
                                                            
                                                            $month = 3;
                                                            $year = date('Y');
                                                            
                                                            for ($d = 1; $d <= 31; $d++) {
                                                                $time = mktime(12, 0, 0, $month, $d, $year);
                                                                if (date('m', $time) == $month) {
                                                                    echo '<span class="flatpickr-day selectdateA prevMonthDay"aria-label="' .
                                                                        date('F j, Y', $time) .
                                                                        '"
                                                    tabindex="-1">' .
                                                                        date('j', $time) .
                                                                        '</span>';
                                                                }
                                                            }
                                                            
                                                        @endphp


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
            </div>
        </div>
    </div>



    <div class="modal fade" id="setAvailability" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="newCatgoryLabel">
                        Tue, 21 Mar 2023
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="mb-3 mb-2">
                            <label class="form-label">Type</label>
                            <select class="selectpicker" data-width="100%">
                                <option value="Course">Available</option>
                                <option value="Tutorial">UnAvailable</option>
                            </select>
                        </div>

                        <div class="mb-3 mb-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label" for="title">Start Time</label>
                                    <input type="time" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="title">End Time</label>
                                    <input type="time" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 mb-3">
                            <label class="form-label">Comment</label>
                            <textarea name="" class="form-control" rows="3"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-outline-white" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('body').on('click', '.selectdateA', function() {
                $('#setAvailability').modal('show');
            })
        })
    </script>
@endpush
