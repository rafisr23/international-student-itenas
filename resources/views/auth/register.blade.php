<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ url('assets/img/logo-itenas.jpg') }}">
  <title>
    REGISTER ACCOUNT
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ url('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ url('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ url('assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('/assets/img/itenas-depan.png');"
      loading="lazy">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-warning shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Register</h4>
                  <div class="row mt-0">
                    <div class="col-12 text-center ms-auto">
                      <a class="px-3 text-decoration-none" href="/">
                        <h6 class="text-center text-white font-weight-bolder">International Student ITENAS Account</h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="mb-3">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                      name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                      placeholder="Full Name">

                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                      name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                      name="password" required autocomplete="new-password" placeholder="Password">

                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                      required autocomplete="new-password" placeholder="Confirm Password" required>
                  </div>
                  <div class="form-check form-check-info text-start">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                    <label class="form-check-label" for="flexCheckDefault">
                      I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                    </label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-warning w-100 my-4 mb-2">Sign up</button>
                  </div>
                  <p class="text-sm mt-3 mb-0">Already have an account? <a href="/login"
                      class="text-warning font-weight-bolder">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-center">
            <div class="col-12 col-md-12 my-auto">
              <div class="copyright text-center text-sm text-white">
                Copyright ©
                <script>
                  document.write(new Date().getFullYear())
                </script>
                <a href="https://www.itenas.ac.id" class="font-weight-bold text-warning" target="_blank">UPT-TIK
                  ITENAS</a>, All
                rights
                reserved.
              </div>
            </div>
            {{-- <div class="col-12 col-md-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-white" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-white" target="_blank">About
                    Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-white" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-white"
                    target="_blank">License</a>
                </li>
              </ul>
            </div> --}}
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="{{ url('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ url('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ url('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ url('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ url('assets/js/plugins/parallax.min.js') }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>
