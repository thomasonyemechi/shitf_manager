@extends('layout.admin')

@section('title')
    Membership Request
@endsection


@section('content')
    <div class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-1 h2 fw-bold">
                            Membership Request
                        </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/admin/">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Request
                                </li>
                            </ol>
                        </nav>
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
                            <input type="search" class="form-control ps-6" placeholder="Search User" />
                        </form>
                    </div>
                    <div class="table-responsive border-0 overflow-y-hidden">
                        <table class="table mb-0 text-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" class="border-0">
                                        <div class="form-check ">
                                            <input type="checkbox" class="form-check-input" id="checkall" />
                                        </div>
                                    </th>
                                    <th scope="col" class="border-0">S/N</th>
                                    <th scope="col" class="border-0">User Name</th>
                                    <th scope="col" class="border-0">Email</th>
                                    <th scope="col" class="border-0">Phone</th>
                                    <th scope="col" class="border-0">Request Date</th>
                                    <th scope="col" class="border-0"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="align-middle border-top-0">
                                            <div class="form-check ">
                                                <input type="checkbox" class="form-check-input" id="checkall" />
                                            </div>
                                        </td>
                                        <td class="align-middle border-top-0">{{ $loop->iteration }} </td>
                                        <td class="border-top-0">
                                            <a href="#" class="text-inherit">
                                                <div class="mt-2 mt-lg-0">
                                                    <h4 class="mb-1 text-primary-hover">
                                                        {{ $user->name }}
                                                    </h4>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="align-middle border-top-0">
                                            <div class="d-flex align-items-center">
                                                <h5 class="mb-0"> {{ $user->email }} </h5>
                                            </div>
                                        </td>
                                        <td class="align-middle border-top-0">{{ $user->phone }} </td>
                                        <td class="align-middle border-top-0">
                                            {{ date('j M, Y', strtotime($user->created_at)) }} </td>
                                        <td class="align-middle border-top-0">
                                            <span class="dropdown dropstart">
                                                <a class="text-decoration-none text-muted" href="#" role="button"
                                                    id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                    aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                                    <span class="dropdown-header">Options</span>
                                                    <a class="dropdown-item text-success " href="/admin/approve_user/{{$user->id}}"><i
                                                            class="fe fe-layers text-success dropdown-item-icon"></i>Approve
                                                    </a>
                                                    <a class="dropdown-item text-danger " href="#"><i
                                                            class="fe fe-layers text-danger dropdown-item-icon"></i>Delete</a>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer border-top-0">

                        {{-- <hr> --}}


                        {{ $users->links('pagination::bootstrap-5') }}

                        <div class="d-flex justify-content-end">
                            <div class="d-flex justify-content-around">
                                <p class="align-middle pt-md-1  border-top-0">With Selected:  </p>
                                <div class="ml-2">
                                    <select name="" class="form-control w-auto p-1" id="">
                                        <option selected disabled>Select Action</option>
                                        <option value="">Approve Request</option>
                                        <option value="">Delete Request</option>
                                    </select>
                                </div>
                            </div>
                        </div>
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
                                    <input type="number" class="form-control" placeholder="eg 10" required> </small>
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
