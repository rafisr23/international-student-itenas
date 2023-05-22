@extends('biro_akademik.layouts.main')

@section('content')
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <table id="tabel-wawancara" class="table table-striped table-bordered mb-3" style="width:100%">
                <thead>
                  <tr>
                    {{-- <th></th> --}}
                    <th>NO</th>
                    <th class="text-center">Nomor Registrasi</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Ruang</th>
                    <th>Status</th>
                    <th class="text-center">Aksi</th>
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
    let table = $('#tabel-wawancara').DataTable({
        processing: true,
        responsive: true,
        serverSide: true,
        ajax: "{{ route('ba.wawancara') }}",
        columns: [
          // {
          //   className: 'dt-control',
          //   orderable: false,
          //   data: null,
          //   defaultContent: '',
          // },
          {
            data: 'DT_RowIndex', 
            name: 'DT_RowIndex',
            searchable: false,
            className: 'text-center'
          },
          {
            data: 'reg_number', 
            name: 'reg_number', 
            className: 'text-center'
          },
          {
            data: 'full_name', 
            name: 'full_name'
          },
          {
            data: 'interview_schedule.interview_date', 
            name: 'interview_schedule.interview_date',
            className: 'text-center'
          },
          {
            data: 'interview_schedule.interview_time', 
            name: 'interview_schedule.interview_time',
            className: 'text-center'
          },
          {
            data: 'interview_schedule.interview_room', 
            name: 'interview_schedule.interview_room',
            className: 'text-center'
          },
          {
            data: 'status', 
            name: 'status',
            render: function(data, type, row, meta) {
              // return '<span class="badge badge-warning">'+data+'</span>';
              if (data == 'Form Review') {
                return '<span class="badge bg-gradient-warning">'+data+'</span>';
              } else if (data == 'Interview') {
                return '<span class="badge bg-gradient-info">'+data+'</span>';
              } else if (data == 'Accepted') {
                return '<span class="badge bg-gradient-success">'+data+'</span>';
              } else if (data == 'Rejected') {
                return '<span class="badge bg-gradient-danger">'+data+'</span>';
              }
            }
          },
          {
            data: 'action', 
            name: 'action', 
            orderable: false, 
            searchable: false, 
            className: 'text-center'
          },
        ],
        order: [[1, 'asc']],
        scrollX: true,
        language: {
          oPaginate: {
            sNext: '<i class="fa fa-forward"></i>',
            sPrevious: '<i class="fa fa-backward"></i>',
            sFirst: '<i class="fa fa-step-backward"></i>',
            sLast: '<i class="fa fa-step-forward"></i>'
          }
        },
      });
      console.log(table);
  </script>
@endsection