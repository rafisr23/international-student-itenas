@extends('biro_akademik.layouts.main')

@section('content')
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <div class="row mb-3">
            <h3>Statistic</h3>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4 text-center">
              <h5>Number of Applicants</h5>
              <h6>{{ $jmlPendaftar }}</h6>
            </div>
            <div class="col-md-4 text-center">
              <h5>Number of Submissions</h5>
              <h6>{{ $jmlSubmit }}</h6>
            </div>
            <div class="col-md-4 text-center">
              <h5>Number of Recipients</h5>
              <h6>{{ $jmlPenerima }}</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection