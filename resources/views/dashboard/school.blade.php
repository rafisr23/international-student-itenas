@extends('layouts.main')

@section('content')
  <div class="card">
    <form action="">
      @csrf
      <div class="card-body">
        <p class="text-uppercase text-md text-bold">Education</p>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="high_school" class="form-control-label">High School or Equivalent Name</label>
              <input class="form-control @error('high_school')
                is-invalid
              @enderror"
                placeholder="High School" type="text" name="high_school" id="high_school">
              @error('high_school')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="grad_date" class="form-control-label">Graduation Date</label>
              <input class="form-control @error('grad_date')
                is-invalid
              @enderror"
                type="date" name="grad_date" id="grad_date" placeholder="Last Name" required>
              @error('grad_date')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="school_address" class="form-control-label">Address</label>
                <input
                  class="form-control @error('school_address')
                  is-invalid
                @enderror"
                  type="text" name="school_address" id="school_address" placeholder="School Address" required>
                @error('school_address')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="school_city" class="form-control-label">City</label>
                <input class="form-control @error('school_city')
                  is-invalid
                @enderror"
                  type="text" name="school_city" id="school_city" placeholder="School City" required>
                @error('school_city')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="school_country" class="form-control-label">Country</label>
                <input
                  class="form-control @error('school_country')
                  is-invalid
                @enderror"
                  type="text" name="school_country" id="school_country" placeholder="School Country" required>
                @error('school_country')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="school_postal_code" class="form-control-label">Postal Code</label>
                <input
                  class="form-control @error('school_postal_code')
                  is-invalid
                @enderror"
                  type="text" name="school_postal_code" id="school_postal_code" placeholder="School Postal Code"
                  required>
                @error('school_postal_code')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection
