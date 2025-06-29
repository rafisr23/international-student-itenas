@extends('biro_akademik.layouts.main')

@section('content')
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-md-3">
              <label class="form-label fs-6">Registration Year</label>
              <select class="form-select" name="year_filter" id="year_filter">
                <option selected disabled>Choose Registration Year</option>
                <option value="0">Show All</option>
                @php
                  $year = date('Y');
                  $min = 2020;
                  $max = $year;
                @endphp
                @for ($i = $max; $i >= $min; $i--)
                    <option value="{{ $i }}" {{ $i == $year ? 'selected' : '' }}>{{ $i }}</option>
                @endfor
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <table id="tabel-pendaftar" class="table table-striped table-bordered mb-3" style="width:100%">
                <thead>
                  <tr>
                    {{-- <th></th> --}}
                    <th>No</th>
                    <th class="text-center">Registration Number</th>
                    <th>Name</th>
                    <th>School of Origin</th>
                    <th>Study Program</th>
                    <th>Scholarship</th>
                    <th>Submit</th>
                    <th>Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
              <div class="row">
                <div class="d-inline">
                  {{-- <button type="button" class="btn bg-gradient-info px-5 me-2 btn-sm" data-bs-toggle="modal" data-bs-target="#modal-default">Wawancara</button>
                  <form action="{{ route('ba.pendaftar.reject') }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="reg_number" value="{{ $form->reg_number }}">
                    <button type="submit" class="btn bg-gradient-danger px-5 btn-sm">Tolak</button>
                  </form> --}}
                  <button onclick="exportTable()" class="btn bg-gradient-success px-5 btn-sm">Export to Excel</button>
                  {{-- <button type="submit" class="btn bg-gradient-success px-5 btn-sm">Export to Excel</button> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script>
    // function format(d) {
    //   // `d` is the original data object for the row
    //   return (
    //     '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
    //     '<tr>' +
    //     '<td><a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a></td>' +
    //     '<td>' +
    //     '</td>' +
    //     '</tr>' +
    //     '</table>'
    //   );
    // }

    $(function() {
      // console.log('hello');
      let table = $('#tabel-pendaftar').DataTable({
        processing: true,
        responsive: true,
        serverSide: true,
        ajax: {
          url: "{{ route('ba.pendaftar') }}",
          data: function(d) {
            d.filter1 = $('#year_filter').val() ? $('#year_filter').val() : '<>';
          }
        },
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
            data: 'high_school', 
            name: 'high_school'
          },
          {
            data: 'study_program.name', 
            name: 'study_program.name'
          },
          {
            data: 'scholarship.name', 
            name: 'scholarship.name'
          },
          {
            data: 'is_submitted',
            name: 'is_submitted',
            render: function(data, type, row, meta) {
              if (data == 0) {
                return '<span class="badge bg-gradient-danger">Unsubmitted</span>';
              } else if (data == 1) {
                return '<span class="badge bg-gradient-success">Submitted</span>';
              }
            }
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
        }
      });

      $("#year_filter").on('change', function() {
        table.draw();
      });

      // console.log(table);
      
      // $('#tabel-pendaftar tbody').on('click', 'td.dt-control', function () {
      //   let tr = $(this).closest('tr');
      //   let row = table.row(tr);

      //   if (row.child.isShown()) {
      //     // This row is already open - close it
      //     row.child.hide();
      //     tr.removeClass('shown');
      //   } else {
      //     // Open this row
      //     row.child(format(row.data())).show();
      //     tr.addClass('shown');
      //   }
      // });
    });

    function exportTable() {
      let filter1 = $('#year_filter').val();

      window.location.href = "{{ route('ba.pendaftar.export', ':year') }}".replace(':year', filter1);
    }


  </script>
@endsection