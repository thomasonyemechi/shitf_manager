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
							<h3 class="mb-0">Set Your Income Goal</h3>
							<p class="mb-0">
								You have full control to manage your own Income.
							</p>
						</div>
						<!-- Card body -->
                        <div class="card-body p-3">
                    <!-- task list -->
                    <div class="task-list">
                      <!-- content -->
                      <div class="d-flex justify-content-between
                        align-items-center mb-3">
                        
                      </div>
                      <!-- task kanban -->
                      <div class="task-kanban">
                        <div id="do">
                          <!-- card -->
                          <div class="">
                            <!-- card body -->
                            <div class="card-body p-3">
                              <div class="d-flex justify-content-between">
                                <div>
                                  <!-- checkbox -->
                                  <div class="form-check custom-checkbox">
                                    <input type="checkbox"
                                      class="form-check-input"
                                      id="customCheck1">
                                    <label class="form-check-label"
                                      for="customCheck1">
                                      <span class="h5">Start prototyping in
                                        frame for admin dashboard.</span>
                                      <br>
                                    </label>
                                  </div>
                                </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="mt-3">
                        <!-- button -->
                        <div class="d-grid">
                          <div class="d-grid">
                        <button type="button" class="btn btn-light-secondary
                           btn-sm rounded-3" data-bs-toggle="modal"
                          data-bs-target="#taskModal">
                          <i class="fe fe-plus-circle me-1"></i>Set Your Goal</button>
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
    <!-- Modal -->
<div class="modal fade" id="taskModal" tabindex="-1" role="dialog"
    aria-labelledby="taskModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="taskModalLabel">Create New Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="fe fe-x-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="row">
                    <div class="mb-2 col-12">
                        <label for="taskTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="taskTitle"
                            placeholder="Title" required>
                    </div>
                    <div class="col-12 mb-4">
                        <label for="priority" class="form-label">Goal</label>
                        <textarea type="text" class="form-control" id="taskTitle"
                            placeholder="My Income Goal" required></textarea>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-secondary
                            me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Create
                            Task</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
