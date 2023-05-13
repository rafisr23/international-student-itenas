@extends('biro_akademik.layouts.main')

@section('content')
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <table id="tabel-pendaftar" class="table" style="width:100%">
                <thead>
                  <tr>
                    {{-- <th>Nomor</th> --}}
                    <th>Nomor Registrasi</th>
                    <th>Nama</th>
                    <th>Asal Sekolah</th>
                    <th>Asal Negara</th>
                    <th>Nomor HP</th>
                    <th>Program Studi</th>
                    <th>Fakultas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script>
    $(function() {
      console.log('hello');
      let table = $('#tabel-pendaftar').DataTable({
        processing: true,
        responsive: true,
        serverSide: true,
        ajax: "{{ route('ba.pendaftar') }}",
        columns: [
          // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
          {data: 'reg_number', name: 'reg_number'},
          {data: 'full_name', name: 'full_name'},
          {data: 'high_school', name: 'high_school'},
          {data: 'country', name: 'country'},
          {data: 'phone_number', name: 'phone_number'},
          {data: 'name', name: 'name'},
          {data: 'faculty', name: 'faculty'},
          {data: 'status', name: 'status'},
          {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        scrollX: true,
      });
      console.log(table);
    });
  </script>
@endsection