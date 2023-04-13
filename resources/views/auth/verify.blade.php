<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ url('assets/img/logo-itenas.jpg') }}">
  <title>
    International Student Itenas
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
          <div class="col-lg-6 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom p-5">
              <div class="card-header">
                <div class="text-center ">
                  <img src="{{ url('assets/img/itenas-logo-full.png') }}" class="img-fluid" alt="logo-itenas"
                    style="width: 200px;">
                </div>
              </div>
              <hr class="horizontal dark">
              <div class="card-body">
                <h4 class="text-dark font-weight-bolder text-center mb-3">{{ __('Verify Your Email Address') }}
                </h4>
                <div class="row mt-0">
                  <div class="col-12 text-center ms-auto">
                    <p class="text-center text-dark">Before proceeding, please check your <b>email (inbox or spam)</b> for a verification
                      link. If you did not receive the email</p>
                    <form method="POST" action="{{ route('verification.resend') }}">
                      @csrf
                      <button type="submit"
                        class="btn btn-warning w-100 mb-0 mt-1">{{ __('Click here to request another!') }}</button>.
                    </form>
                  </div>
                </div>
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
                  ITENAS</a> All
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
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @if (session('resent'))
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'A fresh verification link has been sent to your email address.',
        showConfirmButton: false,
        timer: 3000
      })
    </script>
  @endif
</body>

</html>
