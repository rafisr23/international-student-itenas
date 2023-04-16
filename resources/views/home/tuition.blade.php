@extends('layouts.main-home')

@section('content')
<div class="container my-7">
  <div class="row">
    <div class="col-md-12 p-3">
      <p class="fs-1 fw-bold text-warning">Tuition Fee</p>
      <p class="fs-3 text-dark">Tuition Fee<b class="fw-bold text-warning"> Odd Semester</b></p>
      <table class="table table-bordered table-sm border-dark text-dark">
          <tr>
              <th>Study Program</th>
              <th>Fixed Course Fee</th>
              <th>Variable Course Fee</th>
              <th>Practical / Studio Fee</th>
              <th>Tuition Fee</th>
              <th>Educational Development Fee</th>
              <th>Total Fee</th>
          </tr>
          @foreach ($tuitionFeeOdd as $odd)
          <tr style="border: 1px solid black;">
              <td>{{ $odd->studyProgram->name }}</td>
              <td>Rp{{number_format($odd->fixed_course_fee, 0, ".", ".") }}</td>
              <td>Rp{{number_format($odd->variable_course_fee, 0, ".", ".") }}</td>
              <td>Rp{{number_format($odd->practical_studio_fee, 0, ".", ".") }}</td>
              <td>Rp{{number_format($odd->tuition_fee, 0, ".", ".") }}</td>
              <td>Rp{{number_format($odd->educational_development_fee, 0, ".", ".") }}</td>
              <td>Rp{{number_format($odd->total_fee, 0, ".", ".") }}</td>
          </tr>
          @endforeach
      </table>
    </div>
  </div>
  <hr class="horizontal dark">
  <div class="row">
    <div class="col-md-12 table-responsive p-3">
      <p class="fs-3 text-dark">Tuition Fee<b class="fw-bold text-warning"> Even Semester</b></p>
      <table class="table table-bordered table-sm border-dark text-dark">
          <tr>
              <th>Study Program</th>
              <th>Fixed Course Fee</th>
              <th>Variable Course Fee</th>
              <th>Practical / Studio Fee</th>
              <th>Tuition Fee</th>
          </tr>
          @foreach ($tuitionFeeEven as $even)
          <tr>
              <td>{{ $even->studyProgram->name }}</td>
              <td>Rp{{number_format($even->fixed_course_fee, 0, ".", ".") }}</td>
              <td>Rp{{number_format($even->variable_course_fee, 0, ".", ".") }}</td>
              <td>Rp{{number_format($even->practical_studio_fee, 0, ".", ".") }}</td>
              <td>Rp{{number_format($even->tuition_fee, 0, ".", ".") }}</td>
          </tr>
          @endforeach
      </table>
    </div>
  </div> 
</div>
@endsection