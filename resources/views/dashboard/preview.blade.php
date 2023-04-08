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
          <table class="table table-borderless text-dark">
            <tbody>
              <tr>
                <td colspan="3" class="fw-bold fs-5">Biodata</td>
              </tr>
              <tr>
                <td>Full Name</td>
                <td>:</td>
                <td>{{ $form->student->first_name . ' ' . $form->student->last_name }}</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{ $biodata->user->email }}</td>
              </tr>
              <tr>
                <td>Phone Number</td>
                <td>:</td>
                <td>{{ $form->student->phone_number }}</td>
              </tr>
              <tr>
                <td>Address</td>
                <td>:</td>
                <td>{{ $form->student->address }}</td>
              </tr>
              <tr>
                <td>City</td>
                <td>:</td>
                <td>{{ $form->student->city }}</td>
              </tr>
              <tr>
                <td>Province</td>
                <td>:</td>
                <td>{{ $form->student->postal_code }}</td>
              </tr>
              <tr>
                <td>Country</td>
                <td>:</td>
                <td>{{ $form->student->country }}</td>
              </tr>
              <tr>
                <td colspan="3" class="fw-bold fs-5">School Information</td>
              </tr>
              <tr>
                <td>School Name</td>
                <td>:</td>
                <td>{{ $form->high_school }}</td>
              </tr>
              <tr>
                <td>School Address</td>
                <td>:</td>
                <td>{{ $form->school_address }}</td>
              </tr>
              <tr>
                <td>School City</td>
                <td>:</td>
                <td>{{ $form->school_city }}</td>
              </tr>
              <tr>
                <td>School Country</td>
                <td>:</td>
                <td>{{ $form->school_country }}</td>
              </tr>
              <tr>
                <td>School Postal Code</td>
                <td>:</td>
                <td>{{ $form->school_postal_code }}</td>
              </tr>
              <tr>
                <td colspan="3" class="fw-bold fs-5">Major</td>
              </tr>
              <tr>
                <td>Faculty</td>
                <td>:</td>
                <td>{{ $form->faculty }}</td>
              </tr>
              <tr>
                <td>Program</td>
                <td>:</td>
                <td>{{ $form->program }}</td>
              </tr>
            </tbody>
          </table>
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
