<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}">
    <link href="../assets/fonts/feather/feather.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <title>{{ env('APP_NAME') }} | Create a free account</title>
</head>

<body>
    <!-- Page content -->
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0 min-vh-100">
            <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                <!-- Card -->
                <div class="card shadow">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <h1 class="mb-1 fw-bold">Request To Join</h1>
                            <span>Already have account?
                                <a href="/login" class="ms-1">Log In</a></span>
                        </div>
                        <form method="post" action="/join">@csrf
                            @error('success')
							<div class="mb-3" >
                                <span class="text-success"> {!! $message !!} </span>
							</div>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Enter full name here" required value="{{ old('name') }}" />
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Email address here" required value="{{ old('email') }}" />
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Phone" class="form-label">Phone</label>
                                <input type="tel" id="Phone" class="form-control" name="phone"
                                    placeholder="Enter Phone Number" required value="{{ old('phone') }}" />
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="******" required/>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="agreeCheck" />
                                    <label class="form-check-label" for="agreeCheck">
                                        <span>I agree to the
                                            <a href="#">Terms of Service </a>and
                                            <a href="">Privacy Policy.</a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        Send Request
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/theme.min.js"></script>
</body>

</html>
