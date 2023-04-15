@extends('layouts.main')

@section('content')
  <div class="card">
    @if ($student == null)
      <div class="card-body">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <img src="/assets/img/not-found.png" alt="form-review" height="400" class="m-auto d-block mb-3">
            <div class="alert alert-warning text-center" role="alert">
              Please fill the Biodata First!
            </div>
          </div>
        </div>
      </div>
    @else
      <form action="/applicant-form/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <p class="text-uppercase text-md text-bold">Education</p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="high_school" class="form-control-label">High School or Equivalent Name<sup class="text-danger"> *</sup></label>
                <input class="form-control @error('high_school')
                  is-invalid
                @enderror"
                  placeholder="High School" type="text" name="high_school" id="high_school"
                  value="{{ $form == null ? old('high_school') : old('high_school', $form->high_school) }}" required>
                @error('high_school')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="grad_date" class="form-control-label">Graduation Date<sup class="text-danger"> *</sup></label>
                <input class="form-control @error('grad_date')
                  is-invalid
                @enderror"
                  type="date" name="grad_date" id="grad_date" placeholder="Last Name"
                  value="{{ $form == null ? old('grad_date') : old('grad_date', $form->grad_date) }}" required>
                @error('grad_date')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="school_address" class="form-control-label">Address<sup class="text-danger"> *</sup></label>
                <input class="form-control @error('school_address')
                    is-invalid
                  @enderror"
                  type="text" name="school_address" id="school_address" placeholder="School Address"
                  value="{{ $form == null ? old('school_address') : old('school_address', $form->school_address) }}"
                  required>
                @error('school_address')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="school_city" class="form-control-label">City<sup class="text-danger"> *</sup></label>
                <input class="form-control @error('school_city')
                    is-invalid
                  @enderror"
                  type="text" name="school_city" id="school_city" placeholder="School City"
                  value="{{ $form == null ? old('school_city') : old('school_city', $form->school_city) }}" required>
                @error('school_city')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="school_country" class="form-control-label">Country<sup class="text-danger"> *</sup></label>
                <input class="form-control @error('school_country')
                    is-invalid
                  @enderror"
                  type="text" name="school_country" id="school_country" placeholder="School Country"
                  value="{{ $form == null ? old('school_country') : old('school_country', $form->school_country) }}"
                  required>
                {{-- <select class="form-control school_country" name="school_country" style="width: 100%; height: 100%">
                  <option></option>
                  <option value="">ANJAY</option>
                </select> --}}
                @error('school_country')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="school_postal_code" class="form-control-label">Postal Code<sup class="text-danger"> *</sup></label>
                <input
                  class="form-control @error('school_postal_code')
                    is-invalid
                  @enderror"
                  type="text" name="school_postal_code" id="school_postal_code" placeholder="School Postal Code"
                  value="{{ $form == null ? old('school_postal_code') : old('school_postal_code', $form->school_postal_code) }}"
                  required>
                @error('school_postal_code')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <p class="text-uppercase text-md text-bold">DOCUMENT</p>
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="form-group">
                <label for="" class="form-control-label">4 x 6 Color Photo<sup class="text-danger"> *</sup></label>
                <input type="file" class="dropify form-control" data-height="90" name="color_photo"
                  data-default-file="{{ $form == null ? old('color_photo') : old('color_photo', asset('storage/' . $form->color_photo)) }}" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="" class="form-control-label">Birth Certificate or Passport<sup class="text-danger"> *</sup></label>
                <input type="file" class="dropify form-control" data-height="90" name="passport"
                  data-default-file="{{ $form == null ? old('passport') : old('passport', asset('storage/' . $form->passport)) }}" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="" class="form-control-label">High School Transcript or Report Cards<sup class="text-danger"> *</sup></label>
                <input type="file" class="dropify form-control" data-height="90" name="high_school_transcript"
                  data-default-file="{{ $form == null ? old('high_school_transcript') : old('high_school_transcript', asset('storage/' . $form->high_school_transcript)) }}" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="" class="form-control-label">High School Certificate<sup class="text-danger"> *</sup></label>
                <input type="file" class="dropify form-control" data-height="90" name="high_school_certif"
                  data-default-file="{{ $form == null ? old('high_school_certif') : old('high_school_certif', asset('storage/' . $form->high_school_certif)) }}" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="" class="form-control-label">Financial Verification Documentation (<a href="{{ route('download', 'Financial Verification Doc ITENAS.pdf') }}"><i>download here</a></i>)<sup class="text-danger"> *</sup></label>
                <input type="file" class="dropify form-control" data-height="90" name="financial_verify" data-default-file="{{ $form == null ? old('financial_verify') : old('financial_verify', asset('storage/' . $form->financial_verify)) }}" />
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <p class="text-uppercase text-md text-bold">Study Programs</p>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="faculty">Faculty<sup class="text-danger"> *</sup></label>
                <select class="form-control faculty" id="faculty" name="faculty">
                  @if ($form == null)
                    <option value="" selected>Please Select Faculty</option>
                  @endif
                  @foreach ($faculties as $faculty)
                    <option value="{{ $faculty->id }}" {{ $form == null ? '' : ($form->faculty_id == $faculty->id ? 'selected' : '') }}>{{ $faculty->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="program">Programs<sup class="text-danger"> *</sup></label>
                <select class="form-control program" id="program" name="program">
                  @if ($form == null)
                    <option value="" selected>Please Select Faculty First</option>
                  @endif
                </select>
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <p class="text-uppercase text-md text-bold">SCHOLARSHIP</p>
          <div class="row">
            <div class="col-md-4">
              @foreach ($scholarships as $scholarship)
                <div class="form-check mb-3">
                  <input class="form-check-input" type="radio" name="scholarship" id="{{ $scholarship->name }}" value="{{ $scholarship->id }}" {{ ($form == null ? '' : $form->scholarship_id == $scholarship->id) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="{{ $scholarship->name }}">{{ $scholarship->name }}</label>
                </div>
              @endforeach
            </div>
          </div>
          <hr class="horizontal dark">
        </div>
        <button type="submit" value="submit" class="btn btn-success px-5 btn-sm me-auto ms-3">Save Data</button>
      </form>
    @endif
    {{-- <form action="">
      <button type="submit" value="submit" class="btn btn-success px-5 btn-sm me-auto ms-3">Submit</button>
    </form> --}}
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

  <script>
    window.onload = function() {
      $('.faculty').trigger('change');
    }
    
    // if ({{ $form == null ? 0 : $form->faculty_id}}) {
    //   $('.program').append('<option value="">Please Select Faculty First</option>');
    // } 
    
    $('.faculty').on('change', function() {
      let faculty = $(this).val();
      if (faculty) {
        $.ajax({
          url: "/get/program/",
          type: "GET",
          dataType: "json",
          data: {
            faculty: faculty
          },
          success: function(data) {
            $('.program').empty();
            $('.program').append('<option value="">Select Program</option>');
            $.each(data, function(key, value) {
              if (value.id == {{ $form->program_id ?? 0 }}) {
                $('.program').append('<option value="' + value.id + '" selected>' + value.name + '</option>');
              } else {
                $('.program').append('<option value="' + value.id + '">' + value.name + '</option>');
              }
            });
          }
        });
      } else {
        $('.program').empty();
      }
    });

    $('.dropify').dropify({
      messages: {
        'default': 'Drag and drop a file here or click',
        'replace': 'Drag and drop or click to replace',
        'remove': 'Remove',
        'error': 'Ooops, something wrong happended.'
      }
    });
  </script>
@endsection
