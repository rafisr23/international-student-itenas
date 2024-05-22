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
              <table id="tabel-wawancara" class="table table-striped table-bordered mb-3" style="width:100%">
                <thead>
                  <tr>
                    {{-- <th></th> --}}
                    <th>No</th>
                    <th class="text-center">Registration Number</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Room</th>
                    <th>Status</th>
                    <th class="text-center">Action</th>
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

  {{-- Modals --}}
  <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <input class="form-control" type="text" name="form_id" id="form_id" value="" hidden>
            </div>
            {{-- <div class="row">
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
            </div> --}}
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
  <script>
    let table = $('#tabel-wawancara').DataTable({
        processing: true,
        responsive: true,
        serverSide: true,
        ajax: {
          url: "{{ route('ba.wawancara') }}",
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

      $("#year_filter").on('change', function() {
        table.draw();
      });
      // console.log(table);
  </script>

  <script>
    $(".btn-accept").on('click', function() {
      // $("#modal-default").modal('show');
      console.log('ok');
    });
    $(document).ready(function() {
      let button = $('.btn-accept');
      $(button).on('click', function(e) {
        let form_id = $(this).data('id');
        $('#form_id').val(form_id);
        console.log(form_id);
      });
    });
  </script>
@endsection