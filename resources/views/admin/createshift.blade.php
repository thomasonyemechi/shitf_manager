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
                            <button class="btn btn-outline-white" data-bs-toggle="modal"
                                data-bs-target="#createShift">Create
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
                                        <th scope="col" class="border-0">S/N</th>
                                        <th scope="col" class="border-0">Shift Title</th>
                                        <th scope="col" class="border-0">Reference</th>
                                        <th scope="col" class="border-0">Location</th>
                                        <th scope="col" class="border-0">Workers</th>
                                        <th scope="col" class="border-0">Request</th>
                                        <th scope="col" class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($shifts as $shift)
                                        <tr>
                                            <td class="border-top-0">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="border-top-0">
                                                <a href="/admin/shift/{{$shift->id}}" class="text-inherit">
                                                    <h4 class="mb-1 text-primary-hover">
                                                        {{ $shift->title }}
                                                    </h4>
                                                </a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                {{ $shift->reference }}
                                            </td>
                                            <td class="align-middle border-top-0">
                                                {{ $shift->location }}
                                            </td>
                                            <td class="align-middle border-top-0">{{ $shift->workers_needed }}</td>
                                            <td class="align-middle border-top-0">{{$shift->request_count}} </td>
                                            <td class="align-middle border-top-0">
                                                <span class="dropdown dropstart">
                                                    <a class="text-decoration-none text-muted" href="#" role="button"
                                                        id="courseDropdown1" data-bs-toggle="dropdown"
                                                        data-bs-offset="-20,20" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item text-primary " href="#"><i
                                                                class="fe fe-edit text-primary dropdown-item-icon"></i>Edit Shift</a>
                                                        <a class="dropdown-item text-success " href="/admin/shift/{{$shift->id}}"><i
                                                                class="fe fe-layers text-success dropdown-item-icon"></i>See
                                                            More</a>
                                                        <a class="dropdown-item text-danger" href="#"><i
                                                                class="fe fe-trash text-danger dropdown-item-icon"></i>Delete
                                                            Shift</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer border-top-0">
                            {{ $shifts->links('pagination::bootstrap-5') }}
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
                        <form action="/admin/createshift" method="post"> @csrf
                            <div class="mb-3">
                                <label class="form-label" for="title">Shifts Title<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Write a Category" name="title"
                                    required>
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Salary<span class="text-danger">*</span></label>
                                        <input type="number" step="any" name="salary" class="form-control"
                                            placeholder="eg 30.56" required> </small>
                                        @error('salary')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Workers Needed</label>
                                        <input type="number" class="form-control" name="workers_needed"
                                            placeholder="eg 10" required> </small>
                                        @error('workers_needed')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Location<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="location"
                                            placeholder="Write a Location" required>
                                        @error('location')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Job Type<span class="text-danger">*</span></label>
                                        <select class="selectpicker" name="type" data-width="100%">
                                            <option selected disabled>Select</option>
                                            <option>Permanent</option>>
                                            <option>Temporary</option>>
                                        </select>
                                        @error('type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Discipline</label>
                                        <select class="selectpicker" name="discipline" data-width="100%">
                                            <option selected disabled>Select</option>
                                            <option>Healthcare Assistant Jobs</option>>
                                        </select>
                                        @error('discipline')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Reference</label>
                                        <input type="text" class="form-control" name="reference"
                                            placeholder="Write a Reference" required>
                                        @error('reference')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Job Description</label>
                                <textarea name="description" class="form-control" rows="5" name="description"></textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
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

    </div>
