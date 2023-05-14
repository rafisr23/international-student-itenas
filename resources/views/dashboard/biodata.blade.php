@extends('layouts.main')

@section('content')
  <div class="row">
    <div class="col">
      @if($form == null ? false : $form->is_submitted)
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <img src="/assets/img/block.png" alt="form-review" height="400" class="m-auto d-block mb-3">
              <div class="alert alert-danger text-center text-light" role="alert">
                Sorry, you can't edit your form anymore. Your form has been submitted.
              </div>
            </div>
          </div>
        </div>   
      </div>
      @else 
      <div class="card">
        <div class="card-body ">
          <div class="row gx-4">
            <div class="col-auto">
              <div class="avatar avatar-xl position-relative">
                <img src="/assets/img/user.png" alt="profile_image" class="w-100">
              </div>
            </div>
            <div class="col-auto my-auto">
              <div class="h-100">
                <h5 class="">
                  {{ $user }}
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
                      <div class="form-group form1">
                        <label for="first_name" class="form-control-label">First name<sup class="text-danger"> *</sup></label>
                        <input
                          class="form-control @error('first_name')
                          is-invalid
                        @enderror"
                          placeholder="First Name" type="text"
                          value="{{ $biodata == null ? old('first_name', explode(' ', Auth::user()->name, 2)[0]) : old('first_name', $biodata->first_name) }}"
                          name="first_name" id="first_name" required>
                        @error('first_name')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="last_name" class="form-control-label">Last name<sup class="text-danger"> *</sup></label>
                        <input
                          class="form-control @error('last_name')
                          is-invalid
                        @enderror"
                          type="text"
                          value="{{ $biodata == null ? old('last_name', explode(' ', Auth::user()->name, 2)[1]) : old('last_name', $biodata->last_name) }}"
                          name="last_name" id="last_name" placeholder="Last Name" required>
                        @error('last_name')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="phone_number" class="form-control-label">Phone Number<sup class="text-danger"> *</sup></label>
                        <input
                          class="form-control @error('phone_number')
                          is-invalid
                        @enderror"
                          type="text"
                          value="{{ $biodata == null ? old('phone_number') : old('phone_number', $biodata->phone_number) }}"
                          name="phone_number" id="phone_number" placeholder="Phone Number" required>
                        @error('phone_number')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email" class="form-control-label">Email address<sup class="text-danger"> *</sup></label>
                        <input
                          class="form-control @error('email')
                          is-invalid
                        @enderror"
                          placeholder="Email" type="email" value="{{ Auth::user()->email }}" name="email"
                          id="email" required>
                        @error('email')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label for="" class="form-control-label">Gender<sup class="text-danger"> *</sup></label>
                      <div class="form-check mb-3">
                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="customRadio1" value="L" {{ ($biodata == null ? '' : $biodata->gender == 'L') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customRadio1">Man</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="customRadio2" value="P" {{ ($biodata == null ? '' : $biodata->gender == 'P') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customRadio2">Woman</label>
                      </div>
                    </div>
                  </div>
                  <hr class="horizontal dark">
                  <p class="text-uppercase text-md text-bold">Address Information</p>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="address" class="form-control-label">Address<sup class="text-danger"> *</sup></label>
                        <input
                          class="form-control @error('address')
                          is-invalid
                        @enderror"
                          type="text"
                          value="{{ $biodata == null ? old('address') : old('address', $biodata->address) }}"
                          name="address" id="address" placeholder="Address" required>
                        @error('address')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="city" class="form-control-label">City<sup class="text-danger"> *</sup></label>
                        <input
                          class="form-control @error('city')
                          is-invalid
                        @enderror"
                          type="text" value="{{ $biodata == null ? old('city') : old('city', $biodata->city) }}"
                          name="city" id="city" placeholder="City" required>
                        @error('city')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="country" class="form-control-label">Country<sup class="text-danger"> *</sup></label>
                        <input
                          class="form-control @error('country')
                          is-invalid
                        @enderror"
                          type="text"
                          value="{{ $biodata == null ? old('country') : old('country', $biodata->country) }}"
                          name="country" id="country" placeholder="Country" required>
                        @error('country')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="postal_code" class="form-control-label">Postal Code<sup class="text-danger"> *</sup></label>
                        <input
                          class="form-control @error('postal_code')
                          is-invalid
                        @enderror"
                          type="text"
                          value="{{ $biodata == null ? old('postal_code') : old('postal_code', $biodata->postal_code) }}"
                          name="postal_code" id="postal_code" placeholder="Postal Code" required>
                        @error('postal_code')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <hr class="horizontal dark">
                  <p class="text-uppercase text-md text-bold">About me</p>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="about_me" class="form-control-label">Essay</label>
                        @if ($biodata)
                          <textarea
                            class="form-control @error('about_me')
                          is-invalid
                        @enderror"
                            type="text" name="about_me" id="about_me" placeholder="About Me">{{ old('about_me', $biodata->about_me) }}</textarea>
                        @else
                          <textarea class="form-control @error('about_me')
                        is-invalid
                      @enderror"
                            type="text" name="about_me" id="about_me" placeholder="About Me">{{ old('about_me') }}</textarea>
                        @endif
                        @error('about_me')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" value="submit" class="btn btn-success px-5 btn-sm me-auto ms-3">Save Data</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
@endsection

@section('script')
  @if (session('success'))
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 2000
      })
    </script>
  @elseif (session('error'))
    <script>
      Swal.fire({
        icon: 'warning',
        // title: 'Peringatan',
        title: "{{ session('error') }}",
        showConfirmButton: false,
        timer: 2000
      })
    </script>
  @endif

  {{-- <script>
    $('.form1 input').attr('readonly', 'readonly');
  </script> --}}
@endsection
