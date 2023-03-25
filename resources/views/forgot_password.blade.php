<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}">
    <link href="../assets/fonts/feather/feather.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <title>{{ env('APP_NAME') }} | Forgot Password</title>
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
							<a href="../index.html"><img src="../assets/images/brand/logo/logo-icon.svg" class="mb-4" alt="" /></a>
							<h1 class="mb-1 fw-bold">Forgot Password</h1>
							<p>Fill the form to reset your password.</p>
						</div>
                        <form method="post" >@csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Email address here" required />
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 d-grid">
								<button type="submit" class="btn btn-primary">
									Send Resest Link
								</button>
							</div>
							<span>Return to <a href="/login">log in</a></span>
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
