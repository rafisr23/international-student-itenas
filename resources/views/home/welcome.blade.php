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
              <img src="/assets/img/important-dates-v2.png" alt="" class="border-radius-lg">
            </div>
          </div>
          <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
            <div class="row justify-content-center mb-5">
              <div class="col-md-12 col-sm-6">
                <a href="/registration-guides">
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
                <a href="/tuition-fee">
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
            <div class="row justify-content-center">
              <div class="col-md-12 col-sm-6">
                <a href="/timeline">
                  <div class="card px-3 py-2">
                    <div class="row align-items-center">
                      <div class="col-md-8 col-sm-6">
                        <i class="material-icons text-3xl text-gradient text-warning mb-3">route</i>
                        <h5>Registration Timeline</h5>
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
    <hr class="horizontal dark">
    <section class="py-5 my-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-3">
            <p class="text-dark fs-3 fw-bold">Qualification Track</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-12 align-self-center">
            <div class="row justify-content-center row-cols-1 row-cols-md-4">
              {{-- <div class="col-md-3 me-md-5 align-self-center">
                <div class="card h-100 mb-sm-3">
                  <img src="/assets/img/interview.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Reguler</h5>
                    <p class="card-text">Non - scholarship track.</p>
                  </div>
                  <div class="card-footer">
                    <a href="/register" class="btn btn-warning btn-sm mb-0">Apply now!</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 me-md-5 align-self-center">
                <div class="card h-100 mb-sm-3">
                  <img src="/assets/img/interview.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Cahaya Scholarship</h5>
                    <p class="card-text">Scholarship that offered to support outstanding international students study at the Itenas.</p>
                  </div>
                  <div class="card-footer">
                    <a href="/cahayascholarship/" class="btn btn-warning btn-sm mb-0">Apply now!</a>
                  </div>
                </div>
              </div> --}}
              <div class="col me-3">
                <div class="card h-100">
                  <img src="/assets/img/logo-itenas.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Reguler</h5>
                    <p class="card-text">Non - scholarship track.</p>
                  </div>
                  <div class="card-footer">
                    <a href="/register" class="btn btn-warning btn-sm mb-0">Apply now!</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="/assets/img/logo-itenas.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Cahaya Scholarship</h5>
                    <p class="card-text">Scholarship that offered to support outstanding international students study at the Itenas.</p>
                  </div>
                  <div class="card-footer">
                    <a href="/register" class="btn btn-warning btn-sm mb-0">Apply now!</a>
                  </div>
                </div>
              </div>
              {{-- <div class="col-md-3 align-self-center">
                <div class="card mb-sm-3">
                  <img src="/assets/img/interview.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Darmasiswa Scholarship</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/darmasiswascholarship/register" class="btn btn-warning btn-sm mb-0">Apply now!</a>
                  </div>
                </div>
              </div> --}}
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
    <section class="py-5" id="count-stats">
      <div class="row justify-content-center text-center align-item-center">
        <p class="fs-2 fw-bold text-dark">Statistic About Itenas</p>
        <div class="col-md-3">
          <h1 class="text-gradient text-info"><span id="state1" countTo="14">0</span></h1>
          <h5>Study Program</h5>
          {{-- <p>Of “high-performing” level are led by a certified project manager</p> --}}
        </div>
        <div class="col-md-3">
          <h1 class="text-gradient text-info"><span id="state2" countTo="5000">0</span>+</h1>
          <h5>Students</h5>
          {{-- <p>That meets quality standards required by our users</p> --}}
        </div>
        <div class="col-md-3">
          <h1 class="text-gradient text-info"><span id="state3" countTo="100">0</span>+</h1>
          <h5>Lecturer</h5>
          {{-- <p>Actively engage team members that finishes on time</p> --}}
        </div>
      </div>
    </section>
    <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
    <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    {{-- <section class="my-5">
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
    </section> --}}
    <!-- -------- END PRE-FOOTER 1 ------- -->
  </div>
@endsection
