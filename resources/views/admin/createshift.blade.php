@extends('layout.admin')

@section('title')
    Create a new shift
@endsection


@section('content')
    <div class="container-fluid p-4">



        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-1 h2 fw-bold">
                            Create Shifts
                        </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/admin/">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Create Shift
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <button class="btn btn-outline-white" data-bs-toggle="modal" data-bs-target="#createShift">Create
                            New Shift</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="card mb-4">
                    <div class="card-header border-bottom-0">
                        <form class="d-flex align-items-center">
                            <span class="position-absolute ps-3 search-icon">
                                <i class="fe fe-search"></i>
                            </span>
                            <input type="search" class="form-control ps-6" placeholder="Search Shift" />
                        </form>
                    </div>
                    <!-- Table  -->
                    <div class="table-responsive border-0 overflow-y-hidden">
                        <table class="table mb-0 text-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" class="border-0">Shift</th>
                                    <th scope="col" class="border-0">Created By</th>
                                    <th scope="col" class="border-0">Needed</th>
                                    <th scope="col" class="border-0">Request</th>
                                    <th scope="col" class="border-0">Approved</th>
                                    <th scope="col" class="border-0"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-top-0">
                                        <a href="#" class="text-inherit">
                                            <div class="d-lg-flex align-items-center">
                                                <div class="ms-lg-3 mt-2 mt-lg-0">
                                                    <h4 class="mb-1 text-primary-hover">
                                                        Revolutionize how you build the web...
                                                    </h4>
                                                    <span class="text-inherit">Added on 7 July, 2021</span>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <div class="d-flex align-items-center">
                                            <img src="../../assets/images/avatar/avatar-7.jpg" alt=""
                                                class="rounded-circle avatar-xs me-2" />
                                            <h5 class="mb-0">Reva Yokk</h5>
                                        </div>
                                    </td>
                                    <td class="align-middle border-top-0">30</td>
                                    <td class="align-middle border-top-0">120</td>
                                    <td class="align-middle border-top-0">25</td>
                                    <td class="align-middle border-top-0">
                                        <span class="dropdown dropstart">
                                            <a class="text-decoration-none text-muted" href="#" role="button"
                                                id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i
                                                    class="fe fe-layers dropdown-item-icon"></i>See More</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fe fe-layers dropdown-item-icon"></i>See More</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fe fe-trash dropdown-item-icon"></i>Delete
                                                    Shift</a>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Card Footer -->
                    <div class="card-footer border-top-0">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link mx-1 rounded" href="#" tabindex="-1"
                                        aria-disabled="true"><i class="mdi mdi-chevron-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link mx-1 rounded" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link mx-1 rounded" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link mx-1 rounded" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link mx-1 rounded" href="#"><i
                                            class="mdi mdi-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
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
                        <div class="mb-3 mb-2">
                            <label class="form-label" for="title">Shifts Title<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Write a Category" id="title"
                                required>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-2">
                                    <label class="form-label">Salary<span class="text-danger">*</span></label>
                                    <input type="number" step="0.00" class="form-control" placeholder="eg 30.56"
                                        required> </small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-2">
                                    <label class="form-label">Workers Needed</label>
                                    <input type="number" class="form-control" placeholder="eg 10"
                                        required> </small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 mb-2">
                                    <label class="form-label">Location<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Write a Location" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 mb-2">
                                    <label class="form-label">Job Type<span class="text-danger">*</span></label>
                                    <select class="selectpicker" data-width="100%">
                                        <option selected disabled>Select</option>
                                        <option>Permanent</option>>
                                        <option>Temporary</option>>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 mb-2">
                                    <label class="form-label">Discipline</label>
                                    <select class="selectpicker" data-width="100%">
                                        <option selected disabled>Select</option>
                                        <option>Healthcare Assistant Jobs</option>>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="mb-3 mb-2">
                                    <label class="form-label">Reference</label>
                                    <input type="text" class="form-control" placeholder="Write a Reference" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 mb-3">
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
