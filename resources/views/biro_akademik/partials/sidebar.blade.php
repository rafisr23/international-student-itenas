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
      <li class="nav-item">
        <a class="nav-link {{ request()->segment(2) == 'home' ? 'active' : '' }}" href="{{ route('ba.index') }}">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-house {{ request()->segment(2) == 'home' ? 'text-light' : 'text-dark' }} text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->segment(2) == 'pendaftar' ? 'active' : '' }}" href="{{ route('ba.pendaftar') }}">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-users {{ request()->segment(2) == 'pendaftar' ? 'text-light' : 'text-dark' }} text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Pendaftar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->segment(2) == 'wawancara' ? 'active' : '' }}" href="{{ route('ba.wawancara') }}">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-clipboard-question {{ request()->segment(2) == 'wawancara' ? 'text-light' : 'text-dark' }} text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Wawancara</span>
        </a>
      </li>
      <li class="nav-item">
        {{-- <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6> --}}
        <hr class="horizontal dark">
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)" onclick="signout()">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-right-from-bracket text-danger text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Sign Out</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
