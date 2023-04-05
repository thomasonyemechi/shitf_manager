<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}">

    <link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/dragula/dist/dragula.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/prismjs/themes/prism.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/dropzone/dist/dropzone.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/%40yaireo/tagify/dist/tagify.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/tiny-slider/dist/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/tippy.js/dist/tippy.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


    <title>{{ env('APP_NAME') }} | @yield('page_title') </title>
</head>

<body>
    @include('layout.inc.nav')


    @yield('page_content')
    <div class="py-md-12 py-8 bg-dark ">
    <div class="container">
      <!-- Hero Section -->
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12">
          <div class="mb-4 mb-xl-0 text-center text-md-start">
             <!-- Caption -->
            <h1 class="display-2 fw-bold mb-3 text-white ls-sm ">Helping Britain get the care service it deserves</h1>
            <p class="mb-4 lead text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quidem, 
                nisi unde mollitia magni praesentium velit amet magnam non eum cumque deleniti adipisci 
                minus molestiae nemo voluptates dolorem beatae ducimus!
            </p>
            <a href="#" class=" btn btn-white btn-lg fs-4">Get Started</a>
          </div>
        </div>
        <div class="position-relative offset-xl-1 col-xl-5 col-lg-6 col-md-12">
        <img src="../../assets/images/hero/img8.png" alt="">
        </div>
        
      </div>
      
    </div>
  </div>
  <!-- our services -->
  <div class="py-8 py-lg-18 bg-light">
    <div class="container">
      <div class="row mb-8 justify-content-center">
        <div class="col-lg-8 col-md-12 col-12 text-center">
          <!-- caption -->
          <span class="text-primary mb-3 d-block text-uppercase fw-semi-bold ls-xl">What Will Do</span>
          <h2 class="mb-2 display-4 fw-bold">Our Services</h2>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. totam, enim neque animi dolorum.</p>
        </div>
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-lg-6 col-md-12 col-12">
          <!-- Features -->
          <div class="card mb-4">
              <!-- Card body -->
            <div class="card-body p-6">
              <div class="d-md-flex mb-4">
                <div class="mb-3 mb-md-0">
                    <!-- Img -->
                  <img src="../../assets/images/svg/feature-icon-1.svg" alt=""
                    class=" bg-primary icon-shape icon-xxl rounded-circle">
                </div>
               <!-- Content -->
                <div class="ms-md-4">
                  <h2 class="fw-bold mb-1">YourHealth Care</h2>
                </div>
              </div>
              <p class="mb-4 fs-4">In et tempus dui, in porta dolor. Donec molestie a purus ut interdum. Donec
                quis felis dignissim, luctus libero ornare.</p>
              <a href="#" class="btn-link" data-bs-toggle="modal" data-bs-target="#courseModal">Find Out More  <i
                  class="fe fe-plus"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <!-- features -->
          <div class="card mb-4">
            <div class="card-body p-6">
              <div class="d-md-flex mb-4">
                <div class="mb-3 mb-md-0">
                  <img src="../../assets/images/svg/feature-icon-2.svg" alt=""
                    class=" bg-primary icon-shape icon-xxl rounded-circle">
                </div>
                <div class="ms-md-4">
                  <h2 class="fw-bold mb-1">We Care</h2>
                </div>
              </div>
              <p class="mb-4 fs-4">Malesuada fames ac turpis egesta mpor tempus tincidunt. Aliquam congue lacus
                ac tellus consectetur malesuada.</p>
              <a href="#" class="btn-link" data-bs-toggle="modal" data-bs-target="#courseModal">Find Out More <i
                  class="fe fe-plus"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <!-- features -->
          <div class="card mb-4">
            <div class="card-body p-6">
              <div class="d-md-flex mb-4">
                <div class="mb-3 mb-md-0">
                  <img src="../../assets/images/svg/feature-icon-3.svg" alt=""
                    class=" bg-primary icon-shape icon-xxl rounded-circle">
                </div>
                <div class="ms-md-4">
                  <h2 class="fw-bold mb-1">WeCounsel</h2>
                </div>
              </div>
              <p class="mb-4 fs-4">Aliquam pulvinar eros a dictur vitae diam imperdiet, ornare turpis vequet
                elit nec, imperdiet lectuna liquam qs.</p>
              <a href="#" class="btn-link" data-bs-toggle="modal" data-bs-target="#courseModal">Find out More <i
                  class="fe fe-plus"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <!-- features -->
          <div class="card mb-4">
            <div class="card-body p-6">
              <div class="d-md-flex mb-4">
                <div class="mb-3 mb-md-0">
                  <img src="../../assets/images/svg/feature-icon-4.svg" alt=""
                    class=" bg-primary icon-shape icon-xxl rounded-circle">
                </div>
                <div class="ms-md-4">
                  <h2 class="fw-bold mb-1">Surgery</h2>
                </div>
              </div>
              <p class="mb-4 fs-4">In lobortis quam eu augue spendisse imperdiet nec orci ipsum, tempus pharetra
                posuere imperdiet, lacinia a nisl.</p>
              <a href="#" class="btn-link">Find Out More <i
                  class="fe fe-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our services -->
  <div class="py-8 py-lg-18 bg-white">
      <div class="container">
          <div class="col-lg-12 col-md-12 col-12 text-center">
            <!-- caption -->
            <span class="text-primary mb-3 d-block text-uppercase fw-semi-bold ls-xl">Jobs availabel for You</span>
            <h2 class="mb-2 display-4 fw-bold ">Our Jobs</h2>
            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero aliquam id ut,</p>
        
        </div>
        <!-- row -->
        <div class="row">
          <div class="card col-lg-3 col-md-6 col-12">
            <!-- features -->
            <div class="mb-4">
              <!-- icon -->
              <div class="display-4 text-primary">
                <i class="fe fe-settings"></i>
              </div>
              <!-- para -->
              <div class="mt-4">
                <h3>Learn the latest skills</h3>
                <p class="fs-4">Lorem ipsum dolor sit amet, lorem consectetur adipiscing elit.</p>
                <a href="#" class="btn btn-primary btn-sm">See More</a>
              </div>
            </div>
          </div>
          <div class="card col-lg-3 col-md-6 col-12">
            <!-- features -->
            <div class="mb-4">
              <!-- icon -->
              <div class="display-4 text-primary">
                <i class="fe fe-user"></i>
              </div>
              <!-- para -->
              <div class="mt-4">
                <h3>Get ready for a career</h3>
                <p class="fs-4">Pellentesque eu mi rhoncus, rhoncus tortor a, interdum nisi.</p>
                <a href="#" class="btn btn-primary btn-sm">See More</a>
              </div>
            </div>
          </div>
          <div class="card col-lg-3 col-md-6 col-12">
            <!-- features -->
            <div class="mb-4">
              <!-- icon -->
              <div class="display-4 text-primary">
                <i class="fe fe-award"></i>
              </div>
              <!-- para -->
              <div class="mt-4">
                <h3>Earn a Certificate</h3>
                <p class="fs-4">Quisque tempus lectus cursus, imperdiet eros vel, pulvinar arcu.</p>
                <a href="#" class="btn btn-primary btn-sm">See More</a>
              </div>
            </div>
          </div>
          <div class="card col-lg-3 col-md-6 col-12">
            <!-- features -->
            <div class="mb-4">
              <!-- icon -->
              <div class="display-4 text-primary">
                <i class="fe fe-users"></i>
              </div>
              <!-- para -->
              <div class="mt-4">
                <h3>Upskill your organization</h3>
                <p class="fs-4">Etiam dignissim est tristique ex porta, bibendum commodo.</p>
                <a href="#" class="btn btn-primary btn-sm">See More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- testimonials -->

   <!-- Section -->
   <div class="py-8 py-lg-18 bg-light">
    <div class="container">
      <div class="row mb-8 justify-content-center">
        <div class="col-lg-6 col-md-12 col-12 text-center">
          <!-- caption -->
          <span class="text-primary mb-3 d-block text-uppercase fw-semi-bold ls-xl">Testimonials</span>
          <h2 class="mb-2 display-4 fw-bold ">What our Clients are saying </h2>
          <p class="lead">12+ million people are already to get treated from us</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-12 mb-4 mb-lg-0">
            <!-- Card -->
          <div class="card shadow-lg">
              <!-- Card body -->
            <div class="card-body p-4 p-md-8 text-center">
              <i class="mdi mdi-48px mdi-format-quote-open text-light-primary lh-1"></i>
              <p class="lead text-dark mt-3">The generated lorem Ipsum is therefore always free from repetition,
                injected
                humour, or words etc generate lorem Ipsum which looks racteristic reasonable.</p>
            </div>
              <!-- Card Footer -->
            <div class="card-footer bg-primary text-center border-top-0">
              <div class="mt-n8"><img src="../../assets/images/avatar/avatar-1.jpg" alt=""
                  class="rounded-circle border-primary avatar-xl border border-4"></div>
              <div class="mt-2 text-white">
                <h3 class="text-white mb-0">Gladys Colbert</h3>
                <p class="text-white-50 mb-1">Doctor at Myonline clinic</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12">
            <!-- Card -->
          <div class="card shadow-lg">
            <div class="card-body p-4 p-md-8 text-center">
              <i class="mdi mdi-48px mdi-format-quote-open text-light-info lh-1"></i>
              <p class="lead text-dark mt-3">Lorem ipsum dolor sit amet, consectetur adipi scing elit. Sed vel felis
                imperdiet, lacinia metus malesuada diamamus rutrum turpis leo, id tincidunt magna sodales.</p>
            </div>
              <!-- Card Footer -->
            <div class="card-footer bg-info text-center border-top-0">
              <div class="mt-n8"><img src="../../assets/images/avatar/avatar-2.jpg" alt=""
                  class="rounded-circle border-info avatar-xl border border-4"></div>
              <div class="mt-2 text-white">
                <h3 class="text-white mb-0">Ella Jones</h3>
                <p class="text-white-50 mb-1">Nurse at MyGood Clinic</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- call to action -->
  <div class="py-lg-16 py-10 bg-dark"
    style="background: url(../../assets/images/background/course-graphics.svg)no-repeat; background-size: cover; background-position: top center">
    <div class="container">
      <!-- row -->
      <div class="row justify-content-center text-center">
        <div class="col-md-9 col-12">
          <!-- heading -->
          <h2 class="display-4 text-white">Join more than 1 million Professionals worldwide</h2>
          <p class="lead text-white px-lg-12 mb-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas enim vero quos corporis a,
             rem error amet! Velit natu</p>
          <!-- button -->
          <div class="d-grid d-md-block">
            <a href="#" class="btn btn-primary mb-2 mb-md-0">Start Earning Today</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  

    @include('layout.inc.foot')

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/libs/inputmask/dist/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/libs/quill/dist/quill.min.js') }}"></script>
    <script src="{{ asset('assets/libs/file-upload-with-preview/dist/file-upload-with-preview.min.js') }}"></script>
    <script src="{{ asset('assets/libs/dragula/dist/dragula.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bs-stepper/dist/js/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jQuery.print/jQuery.print.js') }}"></script>
    <script src="{{ asset('assets/libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('assets/libs/prismjs/components/prism-scss.min.js') }}"></script>
    <script src="{{ asset('assets/libs/%40yaireo/tagify/dist/tagify.min.js') }}"></script>
    <script src="{{ asset('assets/libs/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/tippy.js/dist/tippy-bundle.umd.min.js') }}"></script>
    <script src="{{ asset('assets/libs/typed.js/lib/typed.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/dist/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/dist/maps/world.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>

    @if (@session('error'))
        <script>
            Toastify({
                text: `{{ session('error') }}`,
                className: "bg-danger",
                duration: 3000
            }).showToast();
        </script>
    @endif


    @if (@session('success'))
        <script>
            Toastify({
                text: `{{ session('success') }}`,
                className: "success",
                duration: 3000
            }).showToast();
        </script>
    @endif


    @stack('scripts')
</body>

</html>
