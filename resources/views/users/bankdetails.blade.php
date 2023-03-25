@extends('layout.app')

@section('page_title')
    My Dashboard
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
					<!-- Card -->
					<div class="card">
						<!-- Card header -->
						<div class="card-header">
							<h3 class="mb-0">Bank and Pay details</h3>
							<p class="mb-0">
								You have full control to manage your own account setting.
							</p>
						</div>
						<!-- Card body -->
						<div class="card-body">
							
							<div>
								
								<!-- Form -->
								<form class="row">
									<!-- Account name -->
									<div class="mb-3 col-12 col-md-12">
										<label class="form-label" for="fname">Account Name</label>
										<input type="text" id="" class="form-control" placeholder="Account Name" required />
									</div>
									<!-- Acccount Number -->
									<div class="mb-3 col-12 col-md-12">
										<label class="form-label" for="lname">Account Number</label>
										<input type="text" id="" class="form-control" placeholder="Account Number" required />
									</div>
									<!-- bank name -->
									<div class="mb-3 col-12 col-md-12">
										<label class="form-label" for="lname">Bank Name</label>
										<input type="text" id="" class="form-control" placeholder="Bank Name" required />
									</div>
									<div class="col-12">
										<!-- Button -->
										<button class="btn btn-primary" type="submit">
											Update Account
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
@endsection
