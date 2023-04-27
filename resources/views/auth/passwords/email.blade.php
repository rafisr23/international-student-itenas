<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ url('assets/img/logo-itenas.jpg') }}">
  <title>
    FORGOT PASSWORD
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
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Forgot Password</h4>
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
                <form method="POST" action="{{ route('password.email') }}">
                  @csrf
                  <div class="mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                      name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">

                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-warning w-100 my-2 mb-2">Send Password Reset Link</button>
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
  <!-- Github buttons -->
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	@if (session('status'))
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '{{ session('status') }}',
        showConfirmButton: true,
				confirmButtonColor: '#2dce89',
      })
    </script>
  @endif
</body>

</html>
