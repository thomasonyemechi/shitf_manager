@extends('layout.admin')

@section('title')
    Request For Shifts
@endsection

@section('content')
    <div class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-1 h2 fw-bold">
                            Shifts Request
                        </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/admin/">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Shifts Request
                                </li>
                            </ol>
                        </nav>
                    </div>
                    {{-- <div>
                        <button class="btn btn-outline-white" data-bs-toggle="modal"
                            data-bs-target="#createShift">Create
                            New Shift</button>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="card mb-4">
                    <div class="card-header border-bottom-0">
                        <h3 class="card-title mb-0">All Request</h3>
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
                                    <th scope="col" class="border-0">User</th>
                                    <th scope="col" class="border-0">Shift</th>
                                    <th scope="col" class="border-0">location</th>
                                    <th scope="col" class="border-0">Date</th>
                                    <th scope="col" class="border-0">Status</th>
                                    <th scope="col" class="border-0"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($requests as $request)
                                    <tr>
                                        <td class="align-middle border-top-0">
                                            <div class="form-check ">
                                                <input type="checkbox" class="form-check-input tcheck"
                                                    value="{{ $request->id }}" />
                                            </div>
                                        </td>
                                        <td class="border-top-0">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="border-top-0">
                                            <a href="#" class="text-inherit">
                                                <h4 class="mb-1 text-primary-hover">
                                                    {{ $request->user->name }}
                                                </h4>
                                            </a>
                                        </td>
                                        <td class="align-middle border-top-0">
                                            {{ $request->shift->title }}
                                        </td>
                                        <td class="align-middle border-top-0">
                                            {{ $request->shift->location }}
                                        </td>
                                        <td class="align-middle border-top-0">
                                            {{ date('j M, Y', strtotime($request->created_at)) }}
                                        </td>
                                        <td class="border-top-0">
                                            @if ($request->status == 'pending')
                                                <div class="badge bg-warning">
                                                    {{ $request->status }}
                                                </div>
                                            @elseif ($request->status == 'active')
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
                                        </td>
                                        <td class="align-middle border-top-0">
                                            <span class="dropdown dropstart">
                                                <a class="text-decoration-none text-muted" href="#" role="button"
                                                    id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                    aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                                    <span class="dropdown-header">Settings</span>
                                                    <a class="dropdown-item text-success " href="/admin/approve_single_shift/{{$request->id}}"><i
                                                            class="fe fe-check-circle text-success dropdown-item-icon"></i>Approve
                                                        Request</a>
                                                    <a class="dropdown-item text-danger" href="/admin/reject_single_shift/{{$request->id}}"><i
                                                            class="fe fe-trash text-danger dropdown-item-icon"></i>Reject
                                                        Request</a>
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
                        {{ $requests->links('pagination::bootstrap-5') }}
                        <div class="d-flex justify-content-end">
                            <div class="d-flex justify-content-around">
                                <p class="align-middle pt-md-1   border-top-0">With Selected: </p>
                                <div class="ml-2">
                                    <select name="action" class="form-control w-auto p-1" id="">
                                        <option selected disabled>Select Action</option>
                                        <option value="approve">Approve Request</option>
                                        <option value="reject">Reject Request</option>
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
                                    <input type="number" class="form-control" name="workers_needed" placeholder="eg 10"
                                        required> </small>
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
@push('scripts')
    
@endpush
