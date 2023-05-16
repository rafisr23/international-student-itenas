@extends('biro_akademik.layouts.main')

@section('content')
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <p class="text-uppercase text-md text-bold">Biodata Pendaftar</p>
          </div>
          <div class="row">
            <div class="col-md-12">
              {{-- <table class="table table-borderless text-dark">
                <tbody>
                  <tr>
                    <td colspan="2" class="fw-bold fs-6">Registration Number</td>
                    <td class="fs-6">{{ $form->reg_number }}</td>
                  </tr>
                  <tr>
                    <td colspan="3" class="fw-bold fs-6">Biodata</td>
                  </tr>
                  <tr>
                    <td>Full Name</td>
                    <td>:</td>
                    <td>{{ $form->student->first_name . ' ' . $form->student->last_name }}</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{ $form->student->user->email }}</td>
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
                    <td colspan="3" class="fw-bold fs-6">School Information</td>
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
                    <td colspan="3" class="fw-bold fs-6">Major</td>
                  </tr>
                  <tr>
                    <td>Faculty</td>
                    <td>:</td>
                    <td>{{ $form->studyProgram->faculty->name }}</td>
                  </tr>
                  <tr>
                    <td>Program</td>
                    <td>:</td>
                    <td>{{ $form->studyProgram->name }}</td>
                  </tr>
                  <tr>
                    <td>Scholarship</td>
                    <td>:</td>
                    <td>{{ $form->scholarship->name }}</td>
                  </tr>
                </tbody>
              </table> --}}
              <div class="row mb-2">
                <div class="col-md-4 text-center">
                  <span class="navbar-brand">
                    <img src="{{ asset('storage/' . $form->color_photo) }}" height="150">
                  </span>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="first_name" class="form-control-label">First name</label>
                    <input class="form-control" type="text" value="{{ $form->student->first_name }}" id="first_name" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="last_name" class="form-control-label">Last name</label>
                    <input class="form-control" type="text" value="{{ $form->student->last_name }}" id="last_name" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="gender" class="form-control-label">Gender</label>
                    <input class="form-control" type="text" value="{{ $form->student->gender }}" id="gender" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="phone_number" class="form-control-label">Nomor Telepon</label>
                    <input class="form-control" type="text" value="{{ $form->student->phone_number }}" id="phone_number" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input class="form-control" type="text" value="{{ $form->student->user->email }}" id="email" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="address" class="form-control-label">Alamat</label>
                    <input class="form-control" type="text" value="{{ $form->student->address }}" id="address" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="city" class="form-control-label">Kota</label>
                    <input class="form-control" type="text" value="{{ $form->student->city }}" id="city" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="country" class="form-control-label">Negara</label>
                    <input class="form-control" type="text" value="{{ $form->student->country }}" id="country" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="postal_code" class="form-control-label">Kode Pos</label>
                    <input class="form-control" type="text" value="{{ $form->student->postal_code }}" id="postal_code" disabled>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <p class="text-uppercase text-md text-bold">Informasi Sekolah Pendaftar</p>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="high_school" class="form-control-label">Asal Sekolah</label>
                <input class="form-control" type="text" value="{{ $form->high_school }}" id="high_school" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="grad_date" class="form-control-label">Tanggal Lulus</label>
                <input class="form-control" type="text" value="{{ $form->grad_date }}" id="grad_date" disabled>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="school_address" class="form-control-label">Alamat Sekolah</label>
                <input class="form-control" type="text" value="{{ $form->school_address }}" id="school_address" disabled>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="school_city" class="form-control-label">Kota</label>
                <input class="form-control" type="text" value="{{ $form->school_city }}" id="school_city" disabled>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="school_country" class="form-control-label">Negara</label>
                <input class="form-control" type="text" value="{{ $form->school_country }}" id="school_country" disabled>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="school_postal_code" class="form-control-label">Kode Pos</label>
                <input class="form-control" type="text" value="{{ $form->school_postal_code }}" id="school_postal_code" disabled>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <p class="text-uppercase text-md text-bold">Program Studi dan Beasiswa</p>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="study_program_code" class="form-control-label">Kode Program Studi</label>
                <input class="form-control" type="text" value="{{ $form->studyProgram->code }}" id="study_program_code" disabled>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="study_program" class="form-control-label">Program Studi</label>
                <input class="form-control" type="text" value="{{ $form->studyProgram->name }}" id="study_program" disabled>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="faculty" class="form-control-label">Fakultas</label>
                <input class="form-control" type="text" value="{{ $form->studyProgram->faculty->name }}" id="faculty" disabled>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="scholarship" class="form-control-label">Pilihan Beasiswa</label>
                <input class="form-control" type="text" value="{{ $form->scholarship->name }}" id="scholarship" disabled>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <p class="text-uppercase text-md text-bold">Dokumen</p>
          </div>
          <div class="row">
            <div class="col-md-6">
              <table class="table text-dark">
                <tbody>
                  <tr>
                    <td><a href="{{ asset('storage/' . $form->color_photo) }}" target="_blank">Photo</a></td>
                  </tr>
                  <tr>
                    <td><a href="{{ asset('storage/' . $form->passport) }}" target="_blank">Passport</a></td>
                  </tr>
                  <tr>
                    <td><a href="{{ asset('storage/' . $form->high_school_certif) }}" target="_blank">High School Certificate</a></td>
                  </tr>
                  <tr>
                    <td><a href="{{ asset('storage/' . $form->high_school_transcript) }}" target="_blank">High School Transcript</a></td>
                  </tr>
                  <tr>
                    <td><a href="{{ asset('storage/' . $form->financial_verify) }}" target="_blank">Financial Verify</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <p class="text-uppercase text-md text-bold">Seleksi</p>
          </div>
          <div class="row">
            <div class="d-inline">
              <button type="button" class="btn bg-gradient-info px-5 me-2 btn-sm" data-bs-toggle="modal" data-bs-target="#modal-default">Wawancara</button>
              <button type="button" class="btn bg-gradient-danger px-5 btn-sm">Tolak</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Wawancara</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('ba.pendaftar.wawancara') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="row">
            <input class="form-control" type="text" name="student_id" id="student_id" value="{{ $form->student->id }}" hidden>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="interview_date" class="form-control-label">Tanggal Wawancara</label>
                  <input class="form-control" type="date" name="interview_date" id="interview_date" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="interview_time" class="form-control-label">Waktu Wawancara</label>
                  <input class="form-control" type="time" name="interview_time" id="interview_time" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="interview_room" class="form-control-label">Ruangan</label>
                  <input class="form-control" type="text" name="interview_room" id="interview_room" placeholder="Masukan ruangan wawancara" required>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-secondary btn-sm" data-bs-dismiss="modal">Close</button>
          <button type="submit" value="submit" class="btn bg-gradient-success btn-sm">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection