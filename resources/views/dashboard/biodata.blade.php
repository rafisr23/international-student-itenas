@extends('layouts.main')

@section('content')
  {{-- @dd(session()->all()) --}}
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
                {{-- <p class="mb-0 font-weight-bold text-sm">
                  Informatics Engineering
                </p> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="py-4">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <form action="/biodata/store" method="POST">
                @csrf
                <div class="card-body">
                  <p class="text-uppercase text-md text-bold">User Information</p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="first_name" class="form-control-label">First name</label>
                        <input
                          class="form-control @error('firs_name')
                          is-invalid
                        @enderror"
                          placeholder="First Name" type="text"
                          value="{{ $biodata == null ? old('first_name') : old('first_name', $biodata->first_name) }}"
                          name="firs_name" id="firs_name" required>
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
                          type="text"
                          value="{{ $biodata == null ? old('last_name') : old('last_name', $biodata->last_name) }}"
                          name="last_name" id="last_name" placeholder="Last Name" required>
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
                          type="text"
                          value="{{ $biodata == null ? old('phone_number') : old('phone_number', $biodata->phone_number) }}"
                          name="phone_number" id="phone_number" placeholder="Phone Number" required>
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
                          placeholder="Email" type="email"
                          value="{{ $biodata == null ? old('email') : old('email', $biodata->email) }}" name="email"
                          id="email" required>
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
                          type="text"
                          value="{{ $biodata == null ? old('address') : old('address', $biodata->address) }}"
                          name="address" id="address" placeholder="Address" required>
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
                          type="text" value="{{ $biodata == null ? old('city') : old('city', $biodata->city) }}"
                          name="city" id="city" placeholder="City" required>
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
                          type="text"
                          value="{{ $biodata == null ? old('country') : old('country', $biodata->country) }}"
                          name="country" id="country" placeholder="Country" required>
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
                          type="text"
                          value="{{ $biodata == null ? old('postal_code') : old('postal_code', $biodata->postal_code) }}"
                          name="postal_code" id="postal_code" placeholder="Postal Code" required>
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
                        @if ($biodata)
                          <textarea
                            class="form-control @error('about_me')
                          is-invalid
                        @enderror"
                            type="text" name="about_me" id="about_me" placeholder="About Me" required>{{ old('about_me', $biodata->about_me) }}</textarea>
                        @else
                          <textarea class="form-control @error('about_me')
                        is-invalid
                      @enderror"
                            type="text" name="about_me" id="about_me" placeholder="About Me" required>{{ old('about_me') }}</textarea>
                        @endif
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

{{-- @section('script')
  <script>
    const saveBio = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success ml-2',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })

    function savebiodata() {
      saveBio.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, save it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          saveBio.fire(
            'Saved!',
            'Your file has been saved.',
            'success'
          )
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          saveBio.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
          )
        }
      })
    }
  </script>
@endsection --}}
