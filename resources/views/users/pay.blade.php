@extends('layout.app')

@section('page_title')
    My Pay
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
                    <div class="card rounded-3">
                        <div class="card-header border-bottom-0 p-0">
                            <div>
                                <ul class="nav nav-lb-tab" id="tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="table-tab" data-bs-toggle="pill" href="#table"
                                            role="tab" aria-controls="table" aria-selected="true">Withdrawals</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="description-tab" data-bs-toggle="pill" href="#description"
                                            role="tab" aria-controls="description" aria-selected="false">Payslips</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="tabContent">
                                <div class="tab-pane fade show active" id="table" role="tabpanel"
                                    aria-labelledby="table-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="align-items-center">
                                                    <h2 class="mt-4 fw-bold text-center mb-1 h1 lh-1">
                                                        $467777.34
                                                    </h2>

                                                    <form class="row " action="">
                                                        <div class="col-md-12 d-flex justify-content-center">
                                                            <span class="text-sm mb-5 text-muted text-center">Total withdrawable
                                                                ($400)</span>
                                                        </div>
                                                        <div class="col-md-12 d-flex mb-3 justify-content-center">
                                                            <input type="number" class="form-control text-center" style="width: 74%">
                                                        </div>
                                                        <div class="col-md-12 d-flex justify-content-center">
                                                            <a href="#" class="btn btn-primary mb-2  ">withdraw</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="description" role="tabpanel"
                                    aria-labelledby="description-tab">
                                    <div class="col-lg-12 col-md-8 col-12">
          <!-- Card -->
          <div class=" border-0" id="invoice">
            <!-- Card body -->
            <div class="">
              <div class="d-flex justify-content-between mb-6">
                <div>
                  <!-- Img -->
                  <img src="/assets/images/brand/logo/logo-icon.svg" alt="" class="mb-4 avatar-lg">
                  <h4 class="mb-0">MyGood Clinic</h4>
                  <small>INVOICE ID: #1001</small>
                </div>
                <div>
                  <a href="#" class="text-muted print-link no-print"><i class="fe fe-printer"></i></a>
                </div>
              </div>
              <!-- Row -->
              <div class="row">
                <div class="col-md-8 col-12">
                  <span class="fs-6">Invoice From</span>
                  <h5 class="mb-3">Darlene Wilson</h5>
                  <p></p>
                </div>
                <div class="col-md-4 col-12">
                  <span class="fs-6">Invoice To</span>
                  <h5 class="mb-3">Jorge Fisher</h5>
                  <p></p>
                </div>
              </div>
              <!-- Row -->
              <div class="row mb-5">
                <div class="col-8">
                  <span class="fs-6">INVOICED ID</span>
                  <h6 class="mb-0">#1001</h6>
                </div>
                <div class="col-4">
                  <span class="fs-6">Due Date</span>
                  <h6 class="mb-0">20 April 2020</h6>
                </div>
              </div>
              <!-- Table -->
              <div class="table-responsive mb-12">
                <table class="table mb-0 text-nowrap table-borderless">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">Withdrawal</th>
                      <th scope="col">Type</th>
                      <th scope="col">Deductions</th>
                      <th scope="col">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="text-dark">
                      <td>1</span></td>
                      <td>Shift Payments</td>
                      <td>$39.00</td>
                      <td>$39.00</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr class="text-dark">
                      <td colspan="2"></td>
                      <td colspan="1" class="pb-0">Total</td>
                      <td class="pb-0">$39.00</td>
                    </tr>
                    <tr class="text-dark">
                      <td colspan="2"></td>
                      <td colspan="1" class="py-0">Net Amount</td>
                      <td class="py-0">$37.00</td>
                    </tr>
                    <tr class="text-dark">
                      <td colspan="2"></td>
                      <td colspan="1" class="pt-0">Tax*</td>
                      <td class="pt-0">$2.00</td>
                    </tr>
                    <tr class="text-dark">
                      <td colspan="2"></td>
                      <td colspan="1" class="border-top py-1 fw-bold">Grand Total</td>
                      <td class="border-top py-1 fw-bold">$478.50</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- Short note -->
              <p class="border-top pt-3 mb-0 ">Notes: Invoice was created on a computer and is valid
                without the signature and seal.</p>
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
    </div>
@endsection
