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
        <div class="col-md-4">
          <span class="navbar-brand">
            <img src="{{ asset('storage/' . $form->color_photo) }}" height="250">
          </span>
        </div>
        <div class="col-md-8">
          <div class="ms-5">
            <table class="table table-borderless text-dark">
              <tbody>
                <tr>
                  <td colspan="3" class="text-center fw-bold fs-5">Biodata</td>
                </tr>
                <tr>
                  <td class="fw-bold">Full Name</td>
                  <td class="">:</td>
                  <td class="">{{ $biodata->first_name . ' ' . $biodata->last_name }}</td>
                </tr>
                <tr>
                  <td class="fw-bold">Email</td>
                  <td class="">:</td>
                  <td class="">{{ $form->email }}</td>
                </tr>
                <tr>
                  <td class="fw-bold">Address</td>
                  <td class="">:</td>
                  <td class="">{{ $biodata->address }}</td>
                </tr>
                <tr>
                  <td class="fw-bold">City</td>
                  <td class="">:</td>
                  <td class="">{{ $biodata->city }}</td>
                </tr>
                <tr>
                  <td class="fw-bold">Province</td>
                  <td class="">:</td>
                  <td class="">{{ $biodata->postal_code }}</td>
                </tr>
                <tr>
                  <td class="fw-bold">Country</td>
                  <td class="">:</td>
                  <td class="">{{ $biodata->country }}</td>
                </tr>
                <tr>
                  <td colspan="3" class="text-center fw-bold fs-5">School Information</td>
                </tr>
                <tr>
                  <td class="fw-bold">School Name</td>
                  <td class="">:</td>
                  <td class="">{{ $form->high_school }}</td>
                </tr>
                <tr>
                  <td class="fw-bold">School Address</td>
                  <td class="">:</td>
                  <td class="">{{ $form->school_address }}</td>
                </tr>
                <tr>
                  <td class="fw-bold">School City</td>
                  <td class="">:</td>
                  <td class="">{{ $form->school_city }}</td>
                </tr>
                <tr>
                  <td class="fw-bold">School Country</td>
                  <td class="">:</td>
                  <td class="">{{ $form->school_country }}</td>
                </tr>
                <tr>
                  <td class="fw-bold">School Postal Code</td>
                  <td class="">:</td>
                  <td class="">{{ $form->school_postal_code }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row border-3 border-dark border-top">
        <div class="col">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            Copyright ©
            <script>
              document.write(new Date().getFullYear())
            </script>
            <a href="https://www.itenas.ac.id" class="font-weight-bold text-warning" target="_blank">ITENAS</a> | All
            rights
            reserved.
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-4">
          <button type="button" class="btn btn-warning"><i class="fa-solid fa-print me-3"></i>Print Applicant
            Cards</button>
        </div>
      </div>
    </div>
  </div>
@endsection
