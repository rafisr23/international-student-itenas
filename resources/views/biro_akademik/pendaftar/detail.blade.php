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
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="form-group">
                <label for="scholarship" class="form-control-label">Pilihan Beasiswa</label>
                <input class="form-control" type="text" value="{{ $form->scholarship->name }}" id="scholarship" disabled>
              </div>
            </div>
            @if ($form->scholarship_id != 1)
            <div class="col-md-4">
              <div class="form-group">
                  <label class="form-control-label"></label>
                  <button type="button" class="btn bg-gradient-primary px-5 btn-sm d-block" data-bs-toggle="modal" data-bs-target="#achievement">Show Achievement</button>
                </div>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Modals --}}
  <div class="modal fade modal-lg" id="achievement" tabindex="-1" role="dialog" aria-labelledby="achievement" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title text-uppercase" id="modal-title-default">List of Achievement</h6>
        </div>
          <div id="modal-wrapper">
            @foreach ($achievementLists as $value)
              <div class="modal-body">
                <div class="row">
                  <p class="text-md text-bold">List Achievement {{ $loop->iteration }}</p>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="activity">Activity</label>
                      <input required type="text" class="form-control" id="activity" name="activity[]" value="{{ $value->activity }}" disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="level">Level</label>
                      <input required type="text" class="form-control" id="level" name="level[]" value="{{ $value->level}}" disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="position_held">Position Held</label>
                      <input required type="text" class="form-control" id="position_held" name="position_held[]" value="{{ $value->position_held }}" disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="level_achievement">Level of Achievement</label>
                      <input required type="text" class="form-control" id="level_achievement" name="level_achievement[]" value="{{ $value->level_achievement }}" disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="from">From</label>
                      <input required type="text" class="form-control" id="from" name="from[]" value="{{ $value->from }}" disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name_activity">Name of Activity/Organization/Employer</label>
                      <input required type="text" class="form-control" id="name_activity" name="name_activity[]" value="{{ $value->name_activity }}" disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="to">To</label>
                      <input required type="text" class="form-control" id="to" name="to[]" value="{{ $value->to }}" disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="certificate_achievement">Certificate of Achievement</label>
                      @if ($value->certificate_achievement)
                        <p class="text-sm ms-1"><a href="{{ route('cahayascholarship.download.certificate', $value->certificate_achievement) }}" target="_blank">{{ $value->certificate_achievement }}</a></p>
                      @else
                        <p class="text-sm ms-1"><i>There is no certificate for this achievement</i></p>
                      @endif

                    </div>
                  </div>
                </div>
                <hr class="horizontal dark">
                <div class="row">
                  <p class="text-md text-bold">Reference Contact</p>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="first_name_contact">First Name</label>
                      <input required type="text" class="form-control" id="first_name_contact" name="first_name_contact[]" value="{{ $value->first_name_contact }}" disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email_contact">Email</label>
                      <input required type="text" class="form-control" id="email_contact" name="email_contact[]" value="{{ $value->email_contact }}" disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="last_name_contact">Last Name</label>
                      <input required type="text" class="form-control" id="last_name_contact" name="last_name_contact[]" value="{{ $value->last_name_contact }}" disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="telephone_contact">Telephone</label>
                      <input required type="text" class="form-control" id="telephone_contact" name="telephone_contact[]" value="{{ $value->telephone_contact }}" disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="position_contact">Position of Contact Person</label>
                      <input required type="text" class="form-control" id="position_contact" name="position_contact[]" value="{{ $value->position_contact }}" disabled>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link ml-auto text-danger" data-bs-dismiss="modal">Close</button>
          </div>
        </form>
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
                @if ($form->status == 'Form Review')
                  <button type="button" class="btn bg-gradient-info px-5 me-2 btn-sm" data-bs-toggle="modal" data-bs-target="#modal-default">Wawancara</button>
                @endif
                @if ($form->status == 'Interview')
                  <button type="button" class="btn bg-gradient-success px-5 me-2 btn-sm" data-bs-toggle="modal" data-bs-target="#modal-default2">Terima</button>
                @endif
                <form action="{{ route('ba.pendaftar.reject') }}" method="POST" class="d-inline">
                  @csrf
                  <input type="hidden" name="reg_number" value="{{ $form->reg_number }}">
                  <button type="submit" class="btn bg-gradient-danger px-5 btn-sm">Tolak</button>
                </form>
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
            <input class="form-control" type="text" name="form_id" id="form_id" value="{{ $form->id }}" hidden>
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

  {{-- Modals Accepted --}}
  <div class="modal fade" id="modal-default2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="modal-title-notification">Alert!</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="{{ route('ba.pendaftar.accept') }}" method="POST">
          @csrf
          <div class="modal-body">
            <div class="py-3 text-center">
              <i class="ni ni-bell-55 ni-3x"></i>
              <h4 class="text-gradient text-danger mt-4">Are you sure?</h4>
              <p>Are you sure want to accepted to ITENAS?</p>
              <input class="form-control" type="text" name="form_id" id="form_id" value="{{ $form->id }}" hidden>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Ok, Got it</button>
            <button type="button" class="btn btn-link ml-auto" data-bs-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
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
      title: "{{ session('error') }}",
      showConfirmButton: false,
      timer: 2000
    })
  </script>
  @endif
@endsection