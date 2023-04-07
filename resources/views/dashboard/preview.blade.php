@extends('layouts.main')

@section('content')
  <div class="card">
    <div class="card-body m-5">
      <div class="row align-items-center border-3 border-dark border-bottom pb-3">
        <div class="col-md-4 me-auto">
          <h5>International Student Itenas</h5>
          <h5>Applicant Cards</h5>
        </div>
        <div class="col-md-4 d-none d-md-block">
          <div class="ms-5">
            <span class="navbar-brand">
              <img src="/assets/img/itenas-logo-full.png" class="navbar-brand-img" alt="main_logo" width="160">
            </span>
            <span class="navbar-brand ms-3 ">
              <img src="/assets/img/good-start.png" class="navbar-brand-img" alt="main_logo" width="75">
            </span>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-4 me-auto">
          <span class="navbar-brand">
            <img src="{{ asset('storage/' . $form->color_photo) }}" height="250">
          </span>
        </div>
        <div class="col-md-4 d-none d-md-block">
          <div class="ms-5">
            <table>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
