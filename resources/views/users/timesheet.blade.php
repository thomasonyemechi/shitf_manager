@extends('layout.app')

@section('page_title')
    TimeSheet
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

                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h3 class="h4 mb-0">TimeSheet</h3>
                                </div>
                                <div class="card-body">

                                    <div class="row mb-5">
                                        <div class="col-md-6">
                                            <div class=" mb-3">
                                                <div class="d-flex justify-content-between " >
                                                    <h4 class="mb-0 fw-bold">Employee Name:</h4>
                                                    <p class="mb-0 fs-5">{{auth()->user()->name}} </p>
                                                </div>
                                            </div>

                                            <div class=" mb-3">
                                                <div class="d-flex justify-content-between " >
                                                    <h4 class="mb-0 fw-bold">Manager Name:</h4>
                                                    <p class="mb-0 fs-5"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="table-responsive border-0 overflow-y-hidden">
                                        <table class="table mb-0 text-nowrap">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" class="border-0">Date</th>
                                                    <th scope="col" class="border-0">Shift Title</th>
                                                    <th scope="col" class="border-0">Start Time</th>
                                                    <th scope="col" class="border-0">End Time</th>
                                                    <th scope="col" class="border-0">Duration</th>
                                                    <th scope="col" class="border-0">Rate</th>
                                                    <th scope="col" class="border-0">Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @for ($i = 1; $i <= 1; $i++)
                                                    <tr>
                                                        <td class="border-top-0">
                                                            {{ $i }}
                                                        </td>
                                                        <td class="border-top-0">
                                                            <a href="#" class="text-inherit">
                                                                <h4 class="mb-1 text-primary-hover">
                                                                </h4>
                                                            </a>
                                                        </td>
                                                        <td class="border-top-0">
                                                        </td>
                                                        <td class="border-top-0">
                                                        </td>
                                                        <td class="border-top-0">
                                                        </td>
                                                        
                                                        <td class="border-top-0">
                                                        </td>
                                                        <td class="border-top-0">
                                                        </td>
                                                    </tr>
                                                @endfor

                                            </tbody>
                                        </table>
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

                        <div class="mb-3 ">
                            <label class="form-label">Type</label>
                            <select class="selectpicker" data-width="100%">
                                <option value="Course">Available</option>
                                <option value="Tutorial">UnAvailable</option>
                            </select>
                        </div>

                        <div class="mb-3">
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

                        <div class="mb-3 ">
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
