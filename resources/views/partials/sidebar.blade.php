<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
  id="sidenav-main" data-color="warning">
  <div class="sidenav">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="/">
      <img src="/assets/img/logo-itenas.jpg" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">International Student</span>
    </a>
    <ul class="navbar-nav">
      {{-- <li class="nav-item">
        <a class="nav-link {{ request()->segment(1) == 'home' ? 'active' : '' }}" href="/home">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-house text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Home</span>
        </a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link {{ request()->segment(1) == 'biodata' ? 'active' : '' }}" href="/biodata">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-badge text-warning text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Biodata</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->segment(1) == 'school' ? 'active' : '' }}" href="/school">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-paper-diploma text-success text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">School Information</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link " href="./pages/virtual-reality.html">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-app text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Virtual Reality</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="./pages/rtl.html">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">RTL</span>
        </a>
      </li> --}}
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->segment(1) == 'profile' ? 'active' : '' }}" href="/profile">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Profile</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link " href="./pages/sign-in.html">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Sign In</span>
        </a>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link " href="./pages/sign-up.html">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-collection text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Sign Up</span>
        </a>
      </li> --}}
    </ul>
  </div>
</aside>
