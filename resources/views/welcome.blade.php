<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ url('assets/img/logo-itenas.jpg') }}">
  <title>
    International Student Itenas
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ url('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ url('assets/css/material-kit.css?v=3.0.4') }}" rel="stylesheet" />
  {{-- <link id="pagestyle" href="{{ url('assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" /> --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>

<body class="about-us bg-gray-200">
  <!-- Navbar Transparent -->
  <nav class="navbar navbar-expand-lg blur top-0 z-index-3 shadow position-fixed start-0 end-0">
    <div class="container">
      <a class="navbar-brand  text-white  " href="https://demos.creative-tim.com/material-kit/presentation"
        rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
        <img src="/assets/img/itenas-logo-full.png" alt="" width="120">
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
        <ul class="navbar-nav navbar-nav-hover ms-auto">
          <li class="nav-item dropdown dropdown-hover ms-lg-6">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center font-weight-bold"
              id="dropdownMenuPages8" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">apartment</i>
              Faculty
              <img src="/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
            </a>
            <ul
              class="dropdown-menu dropdown-menu-animation dropdown-menu-end dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3"
              aria-labelledby="dropdownMenuBlocks">
              <div class="d-none d-lg-block">
                <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="../presentation.html">
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6
                          class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0 me-2">
                          Faculty of Industrial of Technology</h6>
                      </div>
                      <img src="/assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
                    </div>
                  </a>
                  <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:void(0)">
                      Electrical Engineering
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:void(0)">
                      Mechanical Engineering
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:void(0)">
                      Industrial Engineering
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:void(0)">
                      Chemical Engineering
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:void(0)">
                      Informatics
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:void(0)">
                      Information System
                    </a>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="../presentation.html">
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6
                          class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0 me-2">
                          Faculty of Civil Engineering and Planning</h6>
                      </div>
                      <img src="/assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
                    </div>
                  </a>
                  <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:void(0)">
                      Civil Engineering
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:void(0)">
                      Geodetic Engineering
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:void(0)">
                      Urban and Regional Planning
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:void(0)">
                      Environmental Engineering
                    </a>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                  <a class="dropdown-item py-2 ps-3 border-radius-md" href="../presentation.html">
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6
                          class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                          Faculty of Architecture and Design</h6>
                      </div>
                      <img src="/assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
                    </div>
                  </a>
                  <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:void(0)">
                      Architecture
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:void(0)">
                      Interior Design
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:void(0)">
                      Product Design
                    </a>
                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:void(0)">
                      Visual Communication Design
                    </a>
                  </div>
                </li>
              </div>
              <div class="row d-lg-none">
                <div class="col-md-12">
                  <div class="d-flex mb-2">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                    </div>
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6
                          class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                          Page Sections</h6>
                      </div>
                    </div>
                  </div>
                  <a class="dropdown-item ps-3 border-radius-md mb-1"
                    href="../sections/page-sections/hero-sections.html">
                    Page Headers
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/page-sections/features.html">
                    Features
                  </a>
                  <div class="d-flex mb-2 mt-3">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-laptop text-gradient text-primary"></i>
                    </div>
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6
                          class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                          Navigation</h6>
                      </div>
                    </div>
                  </div>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/navigation/navbars.html">
                    Navbars
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/navigation/nav-tabs.html">
                    Nav Tabs
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/navigation/pagination.html">
                    Pagination
                  </a>
                  <div class="d-flex mb-2 mt-3">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-badge text-gradient text-primary"></i>
                    </div>
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6
                          class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                          Input Areas</h6>
                      </div>
                    </div>
                  </div>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/input-areas/inputs.html">
                    Inputs
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/input-areas/forms.html">
                    Forms
                  </a>
                  <div class="d-flex mb-2 mt-3">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-notification-70 text-gradient text-primary"></i>
                    </div>
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6
                          class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                          Attention Catchers</h6>
                      </div>
                    </div>
                  </div>
                  <a class="dropdown-item ps-3 border-radius-md mb-1"
                    href="../sections/attention-catchers/alerts.html">
                    Alerts
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1"
                    href="../sections/attention-catchers/modals.html">
                    Modals
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1"
                    href="../sections/attention-catchers/tooltips-popovers.html">
                    Tooltips & Popovers
                  </a>
                  <div class="d-flex mb-2 mt-3">
                    <div class="icon h-10 me-3 d-flex mt-1">
                      <i class="ni ni-app text-gradient text-primary"></i>
                    </div>
                    <div class="w-100 d-flex align-items-center justify-content-between">
                      <div>
                        <h6
                          class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                          Elements</h6>
                      </div>
                    </div>
                  </div>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/avatars.html">
                    Avatars
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/badges.html">
                    Badges
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/breadcrumbs.html">
                    Breadcrumbs
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/buttons.html">
                    Buttons
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/dropdowns.html">
                    Dropdowns
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/progress-bars.html">
                    Progress Bars
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/toggles.html">
                    Toggles
                  </a>
                  <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/typography.html">
                    Typography
                  </a>
                </div>
              </div>
            </ul>

          </li>
          <li class="nav-item dropdown dropdown-hover mx-2">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center font-weight-bold"
              id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">info</i>
              Information
              <img src="/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
            </a>
            <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3"
              aria-labelledby="dropdownMenuPages8">
              <div class="d-none d-lg-block">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                  Landing Pages
                </h6>
                <a href="../pages/about-us.html" class="dropdown-item border-radius-md">
                  <span>About Us</span>
                </a>
                <a href="../pages/contact-us.html" class="dropdown-item border-radius-md">
                  <span>Contact Us</span>
                </a>
                <a href="../pages/author.html" class="dropdown-item border-radius-md">
                  <span>Author</span>
                </a>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                  Account
                </h6>
                <a href="../pages/sign-in.html" class="dropdown-item border-radius-md">
                  <span>Sign In</span>
                </a>
              </div>
              <div class="d-lg-none">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                  Landing Pages
                </h6>
                <a href="../pages/about-us.html" class="dropdown-item border-radius-md">
                  <span>About Us</span>
                </a>
                <a href="../pages/contact-us.html" class="dropdown-item border-radius-md">
                  <span>Contact Us</span>
                </a>
                <a href="../pages/author.html" class="dropdown-item border-radius-md">
                  <span>Author</span>
                </a>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                  Account
                </h6>
                <a href="../pages/sign-in.html" class="dropdown-item border-radius-md">
                  <span>Sign In</span>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item my-auto ms-3 ms-lg-0">
            @if (Route::has('login'))
              @auth
                <a href="{{ url('/biodata') }}" class="btn btn-sm bg-white mb-0 me-1 mt-2 mt-md-0"><i
                    class="material-icons opacity-6 me-2 text-md justify-align-center">home</i>Dashboard</a>
              @else
                @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="btn btn-sm btn-warning mb-0 me-1 mt-2 mt-md-0">Register</a>
                @endif
                <a href="{{ route('login') }}" class="btn btn-sm  bg-white  mb-0 me-1 mt-2 mt-md-0">Login</a>
              @endauth
            @endif
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- -------- START HEADER 7 w/ text and video ------- -->
  <header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('/assets/img/itenas-depan.png');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto mt-4">
            <h1 class="text-white">International Student</h1>
            <p class="lead mb-4 text-white opacity-8">We’re constantly trying to express ourselves and actualize our
              dreams. If you have the opportunity to play this game</p>
            <a type="submit" class="btn bg-white text-dark" href="/register">Register Here!</a>
            <h6 class="text-white mb-2 mt-3">Find us on</h6>
            <div class="d-flex justify-content-center">
              <a href="https://www.instagram.com/itenas.official/" target="_blank"><i
                  class="fab fa-instagram text-lg text-white me-4"></i></a>
              <a href="https://www.youtube.com/@itenas-official" target="_blank"><i
                  class="fab fa-youtube text-lg text-white me-4"></i></a>
              <a href="https://www.linkedin.com/school/itenas/mycompany/" target="_blank"><i
                  class="fab fa-linkedin text-lg text-white"></i></a>
              <a href="https://www.itenas.ac.id/"><i class="fa-solid fa-globe text-lg text-white ms-4"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- -------- END HEADER 7 w/ text and video ------- -->
  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <!-- Section with four info areas left & one card right with image and waves -->
    <section class="py-5">
      <div class="container">
        <div class="row align-items-center">
          {{-- <h4 class="text-center mb-0 text-warning">Registration Information</h4> --}}
          <div class="col-lg-6">
            <div class="row justify-content-center">
              <img src="/assets/img/schedule-removebg.png" alt="" class="border-radius-lg">
            </div>
          </div>
          <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
            <div class="row justify-content-center mb-5">
              <div class="col-md-12 col-sm-6">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalGuides">
                  <div class="card px-3 py-2">
                    <div class="row align-items-center">
                      <div class="col-md-8 col-sm-6">
                        <i class="material-icons text-3xl text-gradient text-warning mb-3">app_registration</i>
                        <h5>Registration Guides</h5>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="row justify-content-center mb-5">
              <div class="col-md-12 col-sm-6">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalCost">
                  <div class="card px-3 py-2">
                    <div class="row align-items-center">
                      <div class="col-md-8 col-sm-6">
                        <i class="material-icons text-3xl text-gradient text-warning mb-3">payments</i>
                        <h5>Educational Cost</h5>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="row justify-content-center mb-5">
              <div class="col-md-12 col-sm-6">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalTrack">
                  <div class="card px-3 py-2">
                    <div class="row align-items-center">
                      <div class="col-md-8 col-sm-6">
                        <i class="material-icons text-3xl text-gradient text-warning mb-3">route</i>
                        <h5>Qualification Track</h5>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Section with four info areas left & one card right with image and waves -->
    <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
    <section class="pb-5 position-relative bg-gradient-dark mx-n3">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-start mb-5 mt-5">
            <h3 class="text-white z-index-1 position-relative">Testimonial</h3>
            <p class="text-white opacity-8 mb-0">Student Alumni Itenas</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-4">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100" src="/assets/img/sam.png" alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0">Sam</h5>
                    <h6 class="text-info">USA</h6>
                    <p class="mb-0">
                      {{ Str::limit(
                          "Hello, my name is Sam. I Think Bandung is a very enjoyable city. The people are fun. The city itself is interesting and beautiful. When I was (studying) at ITENAS, I found the students here were cool. They liked to play, hang out ... Itenas'lectures, I was able to speak Indonesian language fluently. I Believe when you come here And you are ready to learn, you can speak in Bahasa Indonesia eventually.",
                          200,
                          '...',
                      ) }}

                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-lg-4 mt-5">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100 rounded-circle" src="/assets/img/nurai.png" alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0">Nurai</h5>
                    <h6 class="text-info">Kazakhstan</h6>
                    <p class="mb-0">
                      {{ Str::limit(
                          "My name is Nurai. I am from Kazakhstan. Now Iam studying at Itenas. I am learning Indonesian language. I love Indonesian language. I've visited Tangkuban Perahu Mountain, Farm House, Ciwalk, Istana Plaza, Pasar Baru and also Kawah Putih. I've visited a lot of places. I chose Itenas because I like studying here.",
                          200,
                          '...',
                      ) }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-4 z-index-2">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100 rounded-circle" src="/assets/img/nabilah.jpg"
                        alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0">Nabila Nur'azizah</h5>
                    <h6 class="text-info">Civil Engineering - 2020</h6>
                    <p class="mb-0">
                      {{ Str::limit(
                          "Itenas was a place where I learned a lot of things, either academically or non-academically. This campus also opened my view about the role of students in creating future leaders characteristic.",
                          250,
                          '...',
                      ) }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-lg-4 mt-5 z-index-2">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100 rounded-circle" src="/assets/img/annisa.jpg"
                        alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0">Annisa Rahma</h5>
                    <h6 class="text-info">Architecture - 2009</h6>
                    <p class="mb-0">I'm proud to be able to study at Itenas, keep going, my Itenas!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
    <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    <section class="my-5 pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 m-auto">
            <h4>Be the first to see the news</h4>
            <p class="mb-4">
              Your company may not be in the software business,
              but eventually, a software company will be in your business.
            </p>
            <div class="row">
              <div class="col-8">
                <div class="input-group input-group-outline">
                  <label class="form-label">Email Here...</label>
                  <input type="text" class="form-control mb-sm-0">
                </div>
              </div>
              <div class="col-4 ps-0">
                <button type="button"
                  class="btn bg-gradient-warning mb-0 h-100 position-relative z-index-2">Subscribe</button>
              </div>
            </div>
          </div>
          <div class="col-md-5 ms-auto">
            <div class="position-relative">
              <img class="max-width-50 w-100 position-relative z-index-2" src="/assets/img/macbook.png"
                alt="image">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- END PRE-FOOTER 1 ------- -->
  </div>
  <footer class="footer pt-3 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-6 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">KAMPUS INSTITUT TEKNOLOGI NASIONAL</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" target="_blank">
                  Jl. PH.H. Mustofa No.23 Bandung 40124
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" target="_blank">
                  Phone: +62 22 7272215, Fax +62 22 7202892
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" target="_blank">
                  humas[at]itenas.ac.id, http://www.itenas.ac.id
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              Copyright ©
              <script>
                document.write(new Date().getFullYear())
              </script>
              <a href="https://www.itenas.ac.id" class="font-weight-bold text-warning" target="_blank">
                ITENAS</a> | All
              rights
              reserved.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  {{-- Modals --}}
  <!-- Modal Guides -->
  <div class="modal fade" id="modalGuides" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Guides</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  {{-- Modal Cost --}}
  <div class="modal fade" id="modalCost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Cost</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row mb-5">
            <div class="col-md-12 table-responsive p-3">
              <h5>Tuition Fee Odd Semester</h5>
              <table id="example" class="table table-striped">
                <thead>
                  <tr>
                      <th>Study Program</th>
                      <th>Fixed Course Fee</th>
                      <th>Variable Course Fee</th>
                      <th>Practical / Studio Fee</th>
                      <th>Tuition Fee</th>
                      <th>Educational Development Fee</th>
                      <th>Total Fee</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($tuitionFeeOdd as $odd)
                  <tr>
                      <td>{{ $odd->studyProgram->name }}</td>
                      <td>Rp{{number_format($odd->fixed_course_fee, 0, ".", ".") }}</td>
                      <td>Rp{{number_format($odd->variable_course_fee, 0, ".", ".") }}</td>
                      <td>Rp{{number_format($odd->practical_studio_fee, 0, ".", ".") }}</td>
                      <td>Rp{{number_format($odd->tuition_fee, 0, ".", ".") }}</td>
                      <td>Rp{{number_format($odd->educational_development_fee, 0, ".", ".") }}</td>
                      <td>Rp{{number_format($odd->total_fee, 0, ".", ".") }}</td>
                  </tr>
                  @endforeach
                </tbody>                
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 table-responsive p-3">
              <h5>Tuition Fee Even Semester</h5>
              <table id="example" class="table table-striped">
                <thead>
                  <tr>
                      <th>Study Program</th>
                      <th>Fixed Course Fee</th>
                      <th>Variable Course Fee</th>
                      <th>Practical / Studio Fee</th>
                      <th>Tuition Fee</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($tuitionFeeEven as $even)
                  <tr>
                      <td>{{ $even->studyProgram->name }}</td>
                      <td>Rp{{number_format($even->fixed_course_fee, 0, ".", ".") }}</td>
                      <td>Rp{{number_format($even->variable_course_fee, 0, ".", ".") }}</td>
                      <td>Rp{{number_format($even->practical_studio_fee, 0, ".", ".") }}</td>
                      <td>Rp{{number_format($even->tuition_fee, 0, ".", ".") }}</td>
                  </tr>
                  @endforeach
                </tbody>                
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  {{-- Modal Track --}}
  <div class="modal fade" id="modalTrack" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Track</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  <!--   Core JS Files   -->
  <script src="{{ url('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ url('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ url('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ url('assets/js/plugins/countup.min.js') }}"></script>
  <script src="{{ url('assets/js/plugins/parallax.min.js') }}"></script>
  <script src="{{ url('assets/js/material-kit.min.js?v=3.0.4') }}" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/underground-works/clockwork-browser@1/dist/toolbar.js"></script>
  <script>
    // get the element to animate
    var element = document.getElementById('count-stats');
    var elementHeight = element.clientHeight;

    // listen for scroll event and call animate function

    document.addEventListener('scroll', animate);

    // check if element is in view
    function inView() {
      // get window height
      var windowHeight = window.innerHeight;
      // get number of pixels that the document is scrolled
      var scrollY = window.scrollY || window.pageYOffset;
      // get current scroll position (distance from the top of the page to the bottom of the current viewport)
      var scrollPosition = scrollY + windowHeight;
      // get element position (distance from the top of the page to the bottom of the element)
      var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

      // is scroll position greater than element position? (is element in view?)
      if (scrollPosition > elementPosition) {
        return true;
      }

      return false;
    }

    var animateComplete = true;
    // animate element when it is in view
    function animate() {
      // is element in view?
      if (inView()) {
        if (animateComplete) {
          if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
              countUp.start();
            } else {
              console.error(countUp.error);
            }
          }
          if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
              countUp1.start();
            } else {
              console.error(countUp1.error);
            }
          }
          if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
              countUp2.start();
            } else {
              console.error(countUp2.error);
            };
          }
          animateComplete = false;
        }
      }
    }

    if (document.getElementById('typed')) {
      var typed = new Typed("#typed", {
        stringsElement: '#typed-strings',
        typeSpeed: 90,
        backSpeed: 90,
        backDelay: 200,
        startDelay: 500,
        loop: true
      });
    }
  </script>
  <script>
    if (document.getElementsByClassName('page-header')) {
      window.onscroll = debounce(function() {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var oVal = (window.scrollY / 3);
        bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
      }, 6);
    }
  </script>
  <script>
    // $(document).ready(function () {
    //   $('#example').DataTable();
    // });
  </script>
</body>

</html>
