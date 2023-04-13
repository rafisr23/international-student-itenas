@extends('layouts.main-home')

@section('content')
  @include('partials.header-home')
  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <!-- Section with four info areas left & one card right with image and waves -->
    <section class="py-5">
      <div class="container">
        <div class="row align-items-center">
          {{-- <h4 class="text-center mb-0 text-warning">Registration Information</h4> --}}
          <div class="col-lg-6">
            <div class="row justify-content-center">
              <img src="/assets/img/schedule-removebg.png" alt="" class="border-radius-lg">
            </div>
          </div>
          <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
            <div class="row justify-content-center mb-5">
              <div class="col-md-12 col-sm-6">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalGuides">
                  <div class="card px-3 py-2">
                    <div class="row align-items-center">
                      <div class="col-md-8 col-sm-6">
                        <i class="material-icons text-3xl text-gradient text-warning mb-3">app_registration</i>
                        <h5>Registration Guides</h5>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="row justify-content-center mb-5">
              <div class="col-md-12 col-sm-6">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalCost">
                  <div class="card px-3 py-2">
                    <div class="row align-items-center">
                      <div class="col-md-8 col-sm-6">
                        <i class="material-icons text-3xl text-gradient text-warning mb-3">payments</i>
                        <h5>Tuition Fee</h5>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="row justify-content-center mb-5">
              <div class="col-md-12 col-sm-6">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalTrack">
                  <div class="card px-3 py-2">
                    <div class="row align-items-center">
                      <div class="col-md-8 col-sm-6">
                        <i class="material-icons text-3xl text-gradient text-warning mb-3">route</i>
                        <h5>Qualification Track</h5>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Section with four info areas left & one card right with image and waves -->
    <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
    <section class="pb-5 position-relative bg-gradient-dark mx-n3">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-start mb-5 mt-5">
            <h3 class="text-white z-index-1 position-relative">Testimonial</h3>
            <p class="text-white opacity-8 mb-0">Student Alumni Itenas</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-4">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100" src="/assets/img/sam.png" alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0">Sam</h5>
                    <h6 class="text-info">USA</h6>
                    <p class="mb-0">
                      {{ Str::limit(
                          "Hello, my name is Sam. I Think Bandung is a very enjoyable city. The people are fun. The city itself is interesting and beautiful. When I was (studying) at ITENAS, I found the students here were cool. They liked to play, hang out ... Itenas'lectures, I was able to speak Indonesian language fluently. I Believe when you come here And you are ready to learn, you can speak in Bahasa Indonesia eventually.",
                          220,
                          '...',
                      ) }}

                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-lg-4 mt-5">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100 rounded-circle" src="/assets/img/nurai.png" alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0">Nurai</h5>
                    <h6 class="text-info">Kazakhstan</h6>
                    <p class="mb-0">
                      {{ Str::limit(
                          "My name is Nurai. I am from Kazakhstan. Now Iam studying at Itenas. I am learning Indonesian language. I love Indonesian language. I've visited Tangkuban Perahu Mountain, Farm House, Ciwalk, Istana Plaza, Pasar Baru and also Kawah Putih. I've visited a lot of places. I chose Itenas because I like studying here.",
                          200,
                          '...',
                      ) }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-4 z-index-2">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100 rounded-circle" src="/assets/img/nabilah.jpg"
                        alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0">Nabila Nur'azizah</h5>
                    <h6 class="text-info">Civil Engineering - 2015</h6>
                    <p class="mb-0">
                      {{ Str::limit(
                          "Itenas was a place where I learned a lot of things, either academically or non-academically. This campus also opened my view about the role of students in creating future leaders characteristic.",
                          250,
                          '...',
                      ) }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-lg-4 mt-5 z-index-2">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100 rounded-circle" src="/assets/img/annisa.jpg"
                        alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0">Annisa Rahma</h5>
                    <h6 class="text-info">Architecture - 2009</h6>
                    <p class="mb-0">I'm proud to be able to study at Itenas, keep going, my Itenas!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
    <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    <section class="my-5 pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 m-auto">
            <h4>Be the first to see the news</h4>
            <p class="mb-4">
              Your company may not be in the software business,
              but eventually, a software company will be in your business.
            </p>
            <div class="row">
              <div class="col-8">
                <div class="input-group input-group-outline">
                  <label class="form-label">Email Here...</label>
                  <input type="text" class="form-control mb-sm-0">
                </div>
              </div>
              <div class="col-4 ps-0">
                <button type="button"
                  class="btn bg-gradient-warning mb-0 h-100 position-relative z-index-2">Subscribe</button>
              </div>
            </div>
          </div>
          <div class="col-md-5 ms-auto">
            <div class="position-relative">
              <img class="max-width-50 w-100 position-relative z-index-2" src="/assets/img/macbook.png"
                alt="image">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- END PRE-FOOTER 1 ------- -->
  </div>
  <footer class="footer pt-3 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-6 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">KAMPUS INSTITUT TEKNOLOGI NASIONAL</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" target="_blank">
                  Jl. PH.H. Mustofa No.23 Bandung 40124
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" target="_blank">
                  Phone: +62 22 7272215, Fax +62 22 7202892
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" target="_blank">
                  humas[at]itenas.ac.id, http://www.itenas.ac.id
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              Copyright ©
              <script>
                document.write(new Date().getFullYear())
              </script>
              <a href="https://www.itenas.ac.id" class="font-weight-bold text-warning" target="_blank">
                ITENAS</a> | All
              rights
              reserved.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  {{-- Modals --}}
  <!-- Modal Guides -->
  <div class="modal fade" id="modalGuides" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Registration Guides</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  {{-- Modal Cost --}}
  <div class="modal fade" id="modalCost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tuition Fee</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  {{-- Modal Track --}}
  <div class="modal fade" id="modalTrack" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Track</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection
