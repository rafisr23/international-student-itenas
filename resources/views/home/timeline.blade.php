@extends('layouts.main-home')

@section('content')
  <div class="container">
    <div class="row my-7">
      <div class="col-md-12">
        <p class="fs-1 fw-bold text-warning">Registration Timeline</p>
        <div class="row mb-5">
          <div class="col-md-12">
            <img src="/assets/img/important-dates-v2.png" alt="" class="border-radius-lg" height="400">
          </div>
        </div>
        <table class="table table-light table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">Undergraduate and Master Program (For International Student)</th>
              <th scope="col">Important Dates</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>Online Registration</th>
              <td>5 February - 30 April 2024 </td>
            </tr>
            <tr>
              <th>Online Interview</th>
              <td>13 - 17 May 2024</td>
            </tr>
            <tr>
              <th>Selection Result Announcement</th>
              <td>31 May 2024</td>
            </tr>
            <tr>
              <th>New Student Registration</th>
              <td>3 - 14 June 2024</td>
            </tr>
            <tr>
              <th>Tuition Fee and Institution Development Donation Payment</th>
              <td>17 - 21 June 2024</td>
            </tr>
            <tr>
              <th>New Student Convocation</th>
              <td>6 September 2024</td>
            </tr>
            <tr>
              <th>First day of lecture</th>
              <td>17 September 2024</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection