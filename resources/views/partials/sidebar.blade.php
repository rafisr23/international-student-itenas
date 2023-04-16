<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
  id="sidenav-main" data-color="warning">
  <div class="sidenav">
    {{-- <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true" id="iconSidenav"></i> --}}
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
      @if ($form == null ? true : !$form->is_submitted)
      <li class="nav-item">
        <a class="nav-link {{ request()->segment(1) == 'biodata' ? 'active' : '' }}" href="/biodata">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-address-card text-dark text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Biodata</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->segment(1) == 'applicant-form' ? 'active' : '' }}" href="/applicant-form">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-paper-diploma text-dark text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Applicant Form</span>
        </a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link {{ request()->segment(1) == 'preview-data' ? 'active' : '' }}" href="/preview-data">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-copy-04 text-dark text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Preview Data</span>
        </a>
      </li>
      <li class="nav-item">
      <li class="nav-item">
        <a class="nav-link {{ request()->segment(1) == 'announcement' ? 'active' : '' }}" href="/announcement">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-bullhorn text-dark text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Announcement</span>
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
