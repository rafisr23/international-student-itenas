@extends('layouts.main')

@section('content')
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <div class="row gx-4">
            <div class="col-auto">
              <div class="avatar avatar-xl position-relative">
                <img src="/assets/img/ivancik.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
              </div>
            </div>
            <div class="col-auto my-auto">
              <div class="h-100">
                <h5 class="mb-1">
                  {{ $user->name }}
                </h5>
                <p class="mb-0 font-weight-bold text-sm">
                  Informatics Engineering
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="py-4">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <form action="">
                @csrf
                <div class="card-body">
                  <p class="text-uppercase text-md text-bold">User Information</p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="first_name" class="form-control-label">First name</label>
                        <input
                          class="form-control @error('first_name')
                          is-invalid
                        @enderror"
                          type="text" value="Abdur Rafi" name="first_name" id="first_name" required>
                        @error('first_name')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="last_name" class="form-control-label">Last name</label>
                        <input
                          class="form-control @error('last_name')
                          is-invalid
                        @enderror"
                          type="text" value="Syach Ridwan" name="last_name" id="last_name" required>
                        @error('last_name')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="phone_number" class="form-control-label">Phone Number</label>
                        <input
                          class="form-control @error('phone_number')
                          is-invalid
                        @enderror"
                          type="phone_number" value="08123456789" name="phone_number" id="phone_number" required>
                        @error('phone_number')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email" class="form-control-label">Email address</label>
                        <input
                          class="form-control @error('email')
                          is-invalid
                        @enderror"
                          type="email" value="{{ old('email', $user->email) }}" name="email" id="email" required>
                        @error('email')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <hr class="horizontal dark">
                  <p class="text-uppercase text-md text-bold">Contact Information</p>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="address" class="form-control-label">Address</label>
                        <input
                          class="form-control @error('address')
                          is-invalid
                        @enderror"
                          type="text" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" name="address"
                          id="address" required>
                        @error('address')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="city" class="form-control-label">City</label>
                        <input
                          class="form-control @error('city')
                          is-invalid
                        @enderror"
                          type="text" value="New York" name="city" id="city" required>
                        @error('city')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="country" class="form-control-label">Country</label>
                        <input
                          class="form-control @error('country')
                          is-invalid
                        @enderror"
                          type="text" value="United States" name="country" id="country" required>
                        @error('country')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="postal_code" class="form-control-label">Postal Code</label>
                        <input
                          class="form-control @error('postal_code')
                          is-invalid
                        @enderror"
                          type="text" value="437300" name="postal_code" id="postal_code" required>
                        @error('postal_code')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <hr class="horizontal dark">
                  <p class="text-uppercase text-md text-bold">About me</p>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="about_me" class="form-control-label">Postal Code</label>
                        <textarea
                          class="form-control @error('about_me')
                          is-invalid
                        @enderror"
                          type="text" name="about_me" id="about_me" required>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, perferendis.</textarea>
                        @error('about_me')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" value="submit" class="btn btn-success px-5 btn-sm me-auto ms-3">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
