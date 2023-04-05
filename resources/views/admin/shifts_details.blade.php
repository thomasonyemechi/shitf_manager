@extends('layout.admin')

@section('title')
    Shift Details
@endsection
@section('content')
    <div class="container-fluid p-4">



        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-1 h2 fw-bold">
                            Shift Details
                        </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/admin/">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Shift Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="card  mb-4">
                    <div class="card-body">
                        <div class="mb-5 mt-3">
                            <h3 class="fw-bold">{{ $shift->title }} Role </h3>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="mb-0 fw-bold">Date Posted</h4>
                                        <p class="mb-0 fs-5">{{ date('j M, Y', strtotime($shift->created_at)) }}</p>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="mb-0 fw-bold">Location </h4>
                                        <p class="mb-0 fs-5">{{ $shift->location }}</p>
                                    </div>
                                </div>
                            </div>


                            <hr class="mt-3">

                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="mb-0 fw-bold">Discipline</h4>
                                        <p class="mb-0 fs-5">{{ $shift->details }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="mb-0 fw-bold">Salary</h4>
                                        <p class="mb-0 fs-5">Up to £{{ $shift->salary }} per hour</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-3">
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="mb-0 fw-bold">Reference</h4>
                                        <p class="mb-0 fs-5">{{ $shift->reference }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
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


                        <div>
                            <button class="btn mt-3 btn-outline-white " style="width: 100%"> <i class="fe fe-edit"></i> Edit
                                Shift Details</button>
                            <button class="btn mt-3 btn-outline-danger " style="width: 100%"> <i class="fe fe-trash-2"></i>
                                Delete Shift</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                    <div>
                                        <span class="fs-6 text-uppercase fw-semi-bold">Needed</span>
                                    </div>
                                    <div>
                                        <span class="fe fe-shopping-bag fs-3 text-primary"></span>
                                    </div>
                                </div>
                                <h2 class="fw-bold mb-0">
                                    {{ $shift->workers_needed }}
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                    <div>
                                        <span class="fs-6 text-uppercase fw-semi-bold">Request</span>
                                    </div>
                                    <div>
                                        <span class="fe fe-shopping-bag fs-3 text-primary"></span>
                                    </div>
                                </div>
                                <h2 class="fw-bold mb-0">
                                    {{ $shift->request_count }}
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                    <div>
                                        <span class="fs-6 text-uppercase fw-semi-bold">Approved</span>
                                    </div>
                                    <div>
                                        <span class="fe fe-shopping-bag fs-3 text-primary"></span>
                                    </div>
                                </div>
                                <h2 class="fw-bold mb-0">
                                    {{ $shift->approved_count }}
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                    <div>
                                        <span class="fs-6 text-uppercase fw-semi-bold">Completed</span>
                                    </div>
                                    <div>
                                        <span class="fe fe-shopping-bag fs-3 text-primary"></span>
                                    </div>
                                </div>
                                <h2 class="fw-bold mb-0">
                                    {{ $shift->completed_count }}
                                </h2>
                            </div>
                        </div>
                    </div>



                </div>


                <div class="card mb-4">
                    <div class="card-header border-bottom-0">
                        <h3 class="card-title mb-0">Requests</h3>
                    </div>
                    <!-- Table  -->
                    <div class="table-responsive border-0 overflow-y-hidden">
                        <table class="table mb-0 text-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" class="border-0">
                                        <div class="form-check ">
                                            <input type="checkbox" class="form-check-input" id="checkall" />
                                        </div>
                                    </th>
                                    <th scope="col" class="border-0">User</th>
                                    <th scope="col" class="border-0">Phone</th>
                                    <th scope="col" class="border-0">Date</th>
                                    <th scope="col" class="border-0">Status</th>
                                    {{-- <th scope="col" class="border-0"></th> --}}
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($requests as $request)
                                    <tr>
                                        <td class="align-middle border-top-0">
                                            <div class="form-check ">
                                                <input type="checkbox" class="form-check-input tcheck " value="{{$request->id}}"  />
                                            </div>
                                        </td>
                                        <td class="border-top-0">
                                            <a href="#" class="text-inherit">
                                                <h4 class="mb-1 text-primary-hover">
                                                    {{ $request->user->name }}
                                                </h4>
                                            </a>
                                        </td>
                                        <td class="border-top-0">
                                            {{ $request->user->phone }}
                                        </td>

                                        <td class="border-top-0">
                                            {{ date('j M, Y', strtotime($request->created_at)) }}
                                        </td>

                                        <td class="border-top-0">
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
                                        </td>
                                        {{-- <td class="align-middle border-top-0">
                                            <span class="dropdown dropstart">
                                                <a class="text-decoration-none text-muted" href="#" role="button"
                                                    id="courseDropdown1" data-bs-toggle="dropdown"
                                                    data-bs-offset="-20,20" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                                    <span class="dropdown-header">Settings</span>
                                                    <a class="dropdown-item text-success " href="#"><i
                                                            class="fe fe-check-circle text-success dropdown-item-icon"></i>Approve
                                                        Request</a>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="fe fe-trash text-danger dropdown-item-icon"></i>Reject
                                                        Request</a>
                                                </span>
                                            </span>
                                        </td> --}}
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
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
@endsection

@push('scripts')
    <script>
        $(function() {
            $('select[name="action"]').on('change', function() {
                let action = $(this).val()
                let checks = $('.tcheck');
                let data = []
                // console.log(typeof(checks.));
                // return;
                checks.map(ck => {
                    ck = checks[ck];
                    if (ck.checked) {
                        data.push(ck.value);
                    }
                });

                $.ajax({
                    method: 'post',
                    url: '/admin/approve_shift_request',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        data: data,
                        shift_id: `<?= $shift->id ?>`,
                        action: action
                    }
                }).done(function(res) {
                    console.log(res);
                    alert('Action excuted sucessfuly')
                    location.reload();
                }).fail(function(res) {
                    console.log(res);
                    alert('An error occured ')
                })
                console.log(data);
            })
        })
    </script>
@endpush
