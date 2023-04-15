<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>
    {{ $title ?? 'Dashboard' }}
  </title>
  <!--     Fonts and icons     -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" /> --}}
  <!-- Nucleo Icons -->
  {{-- <link href="{{ url('assets/css/nucleo-icons.css') }}" rel="stylesheet" /> --}}
  {{-- <link href="{{ url('assets/css/nucleo-svg.css') }}" rel="stylesheet" /> --}}
  <link id="pagestyle" href="{{ url('assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
</head>

<body>
  <div class="card">
    <div class="card-body m-5">
      <div class="row align-items-center border-3 border-dark border-bottom pb-3">
        <div class="col-md-4 me-auto">
          <h5>International Student Itenas</h5>
          <h5>Applicant Cards</h5>
        </div>
        <div class="col-md-4 d-none d-md-block">
          <div class="ms-9">
            <span class="navbar-brand">
              <img src="{{ asset('assets/img/itenas-logo-full.png') }}" class="navbar-brand-img" alt="main_logo" width="160">
            </span>
            <span class="navbar-brand ms-3 ">
              <img src="{{ asset('assets/img/good-start.png') }}" class="navbar-brand-img" alt="main_logo" width="75">
            </span>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-4">
          <span class="navbar-brand">
            <img src="{{ $form == null ? '' : asset('storage/' . $form->color_photo) }}" height="250">
          </span>
        </div>
        <div class="col-md-8">
          <table class="table table-borderless text-dark">
            <tbody>
              <tr>
                <td colspan="2" class="fw-bold fs-5">Registration Number</td>
                <td class="fs-5">{{ $form->reg_number }}</td>
              </tr>
              <tr>
                <td colspan="3" class="fw-bold fs-5">Biodata</td>
              </tr>
              <tr>
                <td>Full Name</td>
                <td>:</td>
                <td>{{ $biodata->first_name . ' ' . $biodata->last_name }}</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{ $biodata->user->email }}</td>
              </tr>
              <tr>
                <td>Phone Number</td>
                <td>:</td>
                <td>{{ $biodata->phone_number }}</td>
              </tr>
              <tr>
                <td>Address</td>
                <td>:</td>
                <td>{{ $biodata->address }}</td>
              </tr>
              <tr>
                <td>City</td>
                <td>:</td>
                <td>{{ $biodata->city }}</td>
              </tr>
              <tr>
                <td>Province</td>
                <td>:</td>
                <td>{{ $biodata->postal_code }}</td>
              </tr>
              <tr>
                <td>Country</td>
                <td>:</td>
                <td>{{ $biodata->country }}</td>
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
                <td>{{ $form->faculty_name }}</td>
              </tr>
              <tr>
                <td>Program</td>
                <td>:</td>
                <td>{{ $form->program_name }}</td>
              </tr>
              <tr>
                <td>Scholarship</td>
                <td>:</td>
                <td>{{ $form->scholarship_name }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row border-3 border-dark border-top">
        <div class="col-md-3 col-sm-6 col-6 me-auto">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            {{ date('d F Y', strtotime($form->created_at)) }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ url('assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>

</body>

</html>
