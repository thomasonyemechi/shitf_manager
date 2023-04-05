@extends('layout.admin')

@section('title')
    All active users
@endsection


@section('content')
    <div class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-1 h2 fw-bold">
                            Active Users
                        </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/admin/">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Active Users
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <form class="d-flex align-items-center mb-4" method="get">
                <span class="position-absolute ps-3 search-icon">
                    <i class="fe fe-search"></i>
                </span>
                <input type="search" class="form-control ps-6" placeholder="Search User" name="q" />
            </form>
            <div class="col-lg-12 col-md-12 col-12">

                <div class="row">

                    @foreach ($users as $user)
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{asset('assets/images/user/user.png')}}"
                                        class="rounded-circle avatar-xl mb-3" alt="" />
                                    <h4 class="mb-0">{{$user->name}} </h4>
                                    <p class="mb-0">{{$user->email}}</p>
                                </div>
                                <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                    <span>Phone</span>
                                    <span class="text-dark">{{$user->phone}}</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <span>Joined</span>
                                    <span class="text-warning">
                                        {{date('j M, Y', strtotime($user->created_at))}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
                <div class="">
                    {{ $users->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="createShift" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="newCatgoryLabel">
                        Create New Shift
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="title">Shifts Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Write a Category" id="title"
                                required>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Salary<span class="text-danger">*</span></label>
                                    <input type="number" step="0.00" class="form-control" placeholder="eg 30.56"
                                        required> </small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Workers Needed</label>
                                    <input type="number" class="form-control" placeholder="eg 10" required> </small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Location<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Write a Location" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Job Type<span class="text-danger">*</span></label>
                                    <select class="selectpicker" data-width="100%">
                                        <option selected disabled>Select</option>
                                        <option>Permanent</option>>
                                        <option>Temporary</option>>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Discipline</label>
                                    <select class="selectpicker" data-width="100%">
                                        <option selected disabled>Select</option>
                                        <option>Healthcare Assistant Jobs</option>>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Reference</label>
                                    <input type="text" class="form-control" placeholder="Write a Reference" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Job Description</label>
                            <textarea name="" class="form-control" rows="5"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Create</button>
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
