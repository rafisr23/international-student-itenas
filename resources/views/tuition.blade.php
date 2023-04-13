@extends('layouts.main-home')

@section('content')
  <div class="row mb-5">
    <div class="col-md-12 table-responsive p-3">
      <h5>Tuition Fee Odd Semester</h5>
      <table id="example" class="table table-striped">
        <thead>
          <tr>
              <th>Study Program</th>
              <th>Fixed Course Fee</th>
              <th>Variable Course Fee</th>
              <th>Practical / Studio Fee</th>
              <th>Tuition Fee</th>
              <th>Educational Development Fee</th>
              <th>Total Fee</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tuitionFeeOdd as $odd)
          <tr>
              <td>{{ $odd->studyProgram->name }}</td>
              <td>Rp{{number_format($odd->fixed_course_fee, 0, ".", ".") }}</td>
              <td>Rp{{number_format($odd->variable_course_fee, 0, ".", ".") }}</td>
              <td>Rp{{number_format($odd->practical_studio_fee, 0, ".", ".") }}</td>
              <td>Rp{{number_format($odd->tuition_fee, 0, ".", ".") }}</td>
              <td>Rp{{number_format($odd->educational_development_fee, 0, ".", ".") }}</td>
              <td>Rp{{number_format($odd->total_fee, 0, ".", ".") }}</td>
          </tr>
          @endforeach
        </tbody>                
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 table-responsive p-3">
      <h5>Tuition Fee Even Semester</h5>
      <table id="example" class="table table-striped">
        <thead>
          <tr>
              <th>Study Program</th>
              <th>Fixed Course Fee</th>
              <th>Variable Course Fee</th>
              <th>Practical / Studio Fee</th>
              <th>Tuition Fee</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tuitionFeeEven as $even)
          <tr>
              <td>{{ $even->studyProgram->name }}</td>
              <td>Rp{{number_format($even->fixed_course_fee, 0, ".", ".") }}</td>
              <td>Rp{{number_format($even->variable_course_fee, 0, ".", ".") }}</td>
              <td>Rp{{number_format($even->practical_studio_fee, 0, ".", ".") }}</td>
              <td>Rp{{number_format($even->tuition_fee, 0, ".", ".") }}</td>
          </tr>
          @endforeach
        </tbody>                
      </table>
    </div>
  </div>  
@endsection