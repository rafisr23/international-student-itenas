@extends('layouts.main')

@section('content')
  <div class="card">
    <div class="card-body m-5">
      @if ($form == null)
      <div class="row justify-content-center">
        <div class="col-md-10">
          <img src="/assets/img/not-found.png" alt="form-review" height="400" class="m-auto d-block mb-3">
          <div class="alert alert-warning text-center" role="alert">
            Form preview is not available. Please fill the form
          </div>
        </div>
      </div>
      @else
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
        <div class="col-md-3 col-sm-6 col-6">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            <p class="text-end">
              {{ $form->reg_number }}
            </p>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="colmd-4">
          @if ($form->is_submitted == 1)
            <a href="/print-card" class="btn btn-warning" target="_blank"><i class="fa-solid fa-print me-1"></i>Print Applicant Cards</a>
          @else
            <form action="/applicant-submit" method="POST">
              @csrf
            </form>
            <button class="btn btn-danger" onclick="submitRegistration()">SUBMIT REGISTRATION</button>
          @endif
        </div>
      </div>    
      @endif
    </div>
  </div>
@endsection

@section('script')
  <script>
    const swalSubmit = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success ms-2',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })

    function submitRegistration() {
      swalSubmit.fire({
        title: 'Are you sure submit your registration?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, submit it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: '/applicant-submit',
            type: 'POST',
            data: {
              _token: '{{ csrf_token() }}'
            },
            success: function (data) {
              // show notification first then reload page
              swalSubmit.fire(
                'Submitted!',
                'Your registration has been submitted.',
                'success'
              ).then(() => {
                location.reload()
              })
            }
          })
        }
      })
    }
  </script>
@endsection
