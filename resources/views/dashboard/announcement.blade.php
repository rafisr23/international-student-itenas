@extends('layouts.main')

@section('content')
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-center">
        @if ($form == null)
          <div class="col-md-10">
            <img src="/assets/img/not-found.png" alt="form-review" height="400" class="m-auto d-block mb-3">
            <div class="alert alert-warning text-center" role="alert">
              Form preview is not available. Please fill the form
            </div>
          </div>
        @else
          @if ($form->status == 'Form Review')
          <div class="col-md-10">
              <img src="/assets/img/form-review2.jpg" alt="form-review" height="400" class="m-auto d-block mb-3">
              <div class="alert alert-warning text-center" role="alert">
                <strong>Form Review</strong> Your form is currently being reviewed by the admin.
              </div>
            </div>
          @elseif ($form->status == 'Interview')
            <div class="col-md-10">
              <img src="/assets/img/interview.jpg" alt="interview" height="400" class="m-auto d-block mb-3">
              <div class="alert alert-info text-center" role="alert">
                <strong>Interview</strong> You have been selected to attend the interview. Please check your email for
                further information.
              </div>
            </div>
          @elseif ($form->status == 'Accepted')
            <div class="col-md-10">
              <img src="/assets/img/approved.jpg" alt="accepted" height="400" class="m-auto d-block mb-3">
              <div class="alert alert-success text-center" role="alert">
                <strong>Accepted</strong> Congratulations! You have been accepted to study at ITENAS. Please check your
                email for further information.
              </div>
            </div>
          @elseif ($form->status == 'Rejected')
            <div class="col-md-10">
              <img src="/assets/img/rejected3.png" alt="rejected" height="400" class="m-auto d-block mb-3">
              <div class="alert alert-danger text-center text-light" role="alert">
                <strong>Rejected</strong> We are sorry to inform you that you have been rejected to study at ITENAS.
              </div>
            </div>
          @endif
        @endif
      </div>
    </div>
  </div>
@endsection
