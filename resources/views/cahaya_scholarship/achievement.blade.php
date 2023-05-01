@extends('layouts.main')

@section('content')
<div class="card">
  @if ($form == null)
    <div class="card-body">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <img src="/assets/img/not-found.png" alt="form-review" height="400" class="m-auto d-block mb-3">
          <div class="alert alert-warning text-center" role="alert">
            Please fill the Form First!
          </div>
        </div>
      </div>
    </div>
  @elseif($form == null ? false : $form->is_submitted)
    <div class="card-body">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <img src="/assets/img/block.png" alt="form-review" height="400" class="m-auto d-block mb-3">
          <div class="alert alert-danger text-center text-light" role="alert">
            Sorry, you can't edit your form anymore. Your form has been submitted.
          </div>
        </div>
      </div>
    </div>
  @else
    <form action="/cahayascholarship/achievement/store" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <p class="text-uppercase text-md text-bold">Short Questions and Answers</p>
        <div class="row">
          <label>
            As part of our admissions process, we would like to get to know you better through a series of 5 short response questions . This is not a writing test so please do not write in flowery prose or use big words Instead , please answer simply and honestly in Standard English, so that wo can get a better feel of your interests and whether you will be suitable for the course.
          </label>
          <label for="">
            Each question has a character reply limit, so avoid verbose answers and write straight to the point.
          </label>
        </div>
        <hr class="horizontal dark">
        <div class="row">
          @foreach ($questions as $key=>$question)
            <div class="col-md-12">
              <div class="form-group">
                <label for="{{ 'no_' . $question->id }}" class="form-control-label">{{ $loop->iteration . '. ' . $question->question }}<sup class="text-danger"> *</sup></label>
                @if ($answers->count() != 0)
                  <textarea maxlength="{{ $question->max_answer }}" class="form-control @if ($errors->has('no_' . $question->id)) is-invalid @endif" type="text" name="{{ 'no_' . $question->id }}" id="{{ 'no_' . $question->id }}" placeholder="Enter some text" onkeyup="countChar(this, '#{{ 'no_' . $question->id . '_count'}}')" required>{{ $answers[$key]->answer}}</textarea>
                @else
                  <textarea maxlength="{{ $question->max_answer }}" class="form-control @if ($errors->has('no_' . $question->id)) is-invalid @endif" type="text" name="{{ 'no_' . $question->id }}" id="{{ 'no_' . $question->id }}" placeholder="Enter some text" onkeyup="countChar(this, '#{{ 'no_' . $question->id . '_count'}}')" required>{{ old('no_' . $question->id)}}</textarea>
                @endif
                @if ($errors->has('no_' . $question->id))
                  <div class="invalid-feedback">{{ $errors->first('no_' . $question->id) }}</div>
                @endif
                <label for="{{ 'no_' . $question->id }}" class="form-control-label fw-light text-dark">Remaining character: <span id="{{ 'no_' . $question->id . '_count'}}">{{ $question->max_answer }}</span></label>
              </div>
            </div>
          @endforeach
        </div>
        <hr class="horizontal dark">
        <p class="text-uppercase text-md text-bold">List of Achievement</p>
        <div class="">
          <label>
            As part of your application, please list up to three achievements, or co - curricular activities, or non - academic activities (e.g. social work, competitive sports) in which you have participated 
          </label>
          <label for="">
            Examples of relevant achievements you may indicate include (but are not limited to):
          </label>
          <ul>
            <li><label>Medals won at the International Olympiads (Biology, Chemistry, Informatics, Mathematics and Physics)</label></li>
            <li><label>Representing Singapore in arts or sports competitions.</label></li>
            <li><label>Active participation in community service and volunteering work.</label></li>
            <li><label>Internship or substantial work experience that is related to your degree choices.</label></li>
            <li><label>Key leadership positions in community service , or sports / arts associations , outside the school environment.</label></li>
            <li><label>Leading role in entrepreneurship efforts</label></li>
            <li><label>Creation of a new software or app, or contribution to an open - source software, that is used by many people.</label></li>
          </ul>
        </div>
        @if ($achievementLists->count() >= 1 && $achievementLists->count() <= 2)
          <button type="button" class="btn btn-primary px-5 btn-sm" data-bs-toggle="modal" data-bs-target="#modal-default2">Show Achievement</button>
          <button type="button" class="btn btn-info px-5 btn-sm" data-bs-toggle="modal" data-bs-target="#modal-default">Add Achievement</button>
        @elseif($achievementLists->count() < 1)
          <button type="button" class="btn btn-info px-5 btn-sm" data-bs-toggle="modal" data-bs-target="#modal-default">Add Achievement</button>
        @else
          <button type="button" class="btn btn-primary px-5 btn-sm" data-bs-toggle="modal" data-bs-target="#modal-default2">Show Achievement</button>
        @endif
        {{-- <button type="button" class="btn btn-info px-5 btn-sm" data-bs-toggle="modal" data-bs-target="#modal-default2">Add Achievement</button>
        <button type="button" class="btn btn-info px-5 btn-sm" data-bs-toggle="modal" data-bs-target="#modal-default3">Add Achievement</button> --}}
        <hr class="horizontal dark">
      </div>
      <button type="submit" value="submit" class="btn btn-success px-5 btn-sm me-auto ms-3">Save Data</button>
    </form>
    <!-- Scrollable modal -->
    <div class="modal fade modal-lg" id="modal-default2" tabindex="-1" role="dialog" aria-labelledby="modal-default2" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title text-uppercase" id="modal-title-default">List of Achievement</h6>
            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="text-dark">x</span>
            </button> --}}
          </div>
            <div id="modal-wrapper">
              @foreach ($achievementLists as $value)
                <div class="modal-body">
                  <div class="row">
                    <p class="text-md text-bold">List Achievement {{ $loop->iteration }}</p>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="activity">Activity<sup class="text-danger"> *</sup></label>
                        <input required type="text" class="form-control" id="activity" name="activity[]" value="{{ $value->activity }}">
                        {{-- <select class="form-control" id="activity" name="activity[]">
                          <option>1</option>
                        </select> --}}
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="level">Level<sup class="text-danger"> *</sup></label>
                        <input required type="text" class="form-control" id="level" name="level[]" value="{{ $value->level}}">
                        {{-- <select class="form-control" id="level" name="lavel[]">
                          <option>1</option>
                        </select> --}}
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="position_held">Position Held<sup class="text-danger"> *</sup></label>
                        <input required type="text" class="form-control" id="position_held" name="position_held[]" value="{{ $value->position_held }}">
                        {{-- <select class="form-control" id="position_held" name="position_held[]">
                          <option>1</option>
                        </select> --}}
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="level_achievement">Level of Achievement<sup class="text-danger"> *</sup></label>
                        <input required type="text" class="form-control" id="level_achievement" name="level_achievement[]" value="{{ $value->level_achievement }}">
                        {{-- <select class="form-control" id="level_achievement" name="level_achievement[]">
                          <option>1</option>
                        </select> --}}
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="from">From<sup class="text-danger"> *</sup></label>
                        <input required type="text" class="form-control" id="from" name="from[]" value="{{ $value->from }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name_activity">Name of Activity/Organization/Employer<sup class="text-danger"> *</sup></label>
                        <input required type="text" class="form-control" id="name_activity" name="name_activity[]" value="{{ $value->name_activity }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="to">To<sup class="text-danger"> *</sup></label>
                        <input required type="text" class="form-control" id="to" name="to[]" value="{{ $value->to }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="certificate_achievement">Certificate of Achievement<sup class="text-danger"> *</sup></label>
                        {{-- <input type="file" class="form-control" id="certificate_achievement" name="certificate_achievement[]" > --}}
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
                        <label for="first_name_contact">First Name<sup class="text-danger"> *</sup></label>
                        <input required type="text" class="form-control" id="first_name_contact" name="first_name_contact[]" value="{{ $value->first_name_contact }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email_contact">Email<sup class="text-danger"> *</sup></label>
                        <input required type="text" class="form-control" id="email_contact" name="email_contact[]" value="{{ $value->email_contact }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="last_name_contact">Last Name<sup class="text-danger"> *</sup></label>
                        <input required type="text" class="form-control" id="last_name_contact" name="last_name_contact[]" value="{{ $value->last_name_contact }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="telephone_contact">Telephone<sup class="text-danger"> *</sup></label>
                        <input required type="text" class="form-control" id="telephone_contact" name="telephone_contact[]" value="{{ $value->telephone_contact }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="position_contact">Position of Contact Person<sup class="text-danger"> *</sup></label>
                        <input required type="text" class="form-control" id="position_contact" name="position_contact[]" value="{{ $value->position_contact }}">
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
    <div class="modal fade modal-lg" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title text-uppercase" id="modal-title-default">List of Achievement</h6>
            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="text-dark">x</span>
            </button> --}}
          </div>
          <form action="/cahayascholarship/achievementlist/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div id="modal-wrapper-default">
              <div class="modal-body">
                <div class="row">
                  <p class="text-md text-bold">Adding Achievement</p>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="activity">Activity<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="activity" name="activity[]">
                      {{-- <select class="form-control" id="activity" name="activity[]">
                        <option>1</option>
                      </select> --}}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="level">Level<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="level" name="level[]">
                      {{-- <select class="form-control" id="level" name="lavel[]">
                        <option>1</option>
                      </select> --}}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="position_held">Position Held<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="position_held" name="position_held[]">
                      {{-- <select class="form-control" id="position_held" name="position_held[]">
                        <option>1</option>
                      </select> --}}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="level_achievement">Level of Achievement<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="level_achievement" name="level_achievement[]">
                      {{-- <select class="form-control" id="level_achievement" name="level_achievement[]">
                        <option>1</option>
                      </select> --}}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="from">From<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="from" name="from[]">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name_activity">Name of Activity/Organization/Employer<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="name_activity" name="name_activity[]">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="to">To<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="to" name="to[]">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="certificate_achievement">Certificate of Achievement<sup class="text-danger"> *</sup></label>
                      <input type="file" class="form-control" id="certificate_achievement" name="certificate_achievement[]">
                    </div>
                  </div>
                </div>
                <hr class="horizontal dark">
                <div class="row">
                  <p class="text-md text-bold">Reference Contact</p>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="first_name_contact">First Name<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="first_name_contact" name="first_name_contact[]">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email_contact">Email<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="email_contact" name="email_contact[]">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="last_name_contact">Last Name<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="last_name_contact" name="last_name_contact[]">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="telephone_contact">Telephone<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="telephone_contact" name="telephone_contact[]">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="position_contact">Position of Contact Person<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="position_contact" name="position_contact[]">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-sm btn-info ms-3" id="add-button">Add More Achievement</button>
            <div class="modal-footer">
              <button type="submit" class="btn btn-sm btn-success">Save Data</button>
              <button type="button" class="btn btn-link ml-auto text-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    {{-- <div class="modal fade modal-lg" id="modal-default2" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title text-uppercase" id="modal-title-default">List of Achievement - 2</h6>
          </div>
          <form action="/cahayascholarship/achievementlist/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
              <div class="row">
                <p class="text-md text-bold">Adding Achievement</p>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="activity">Activity<sup class="text-danger"> *</sup></label>
                    <select class="form-control" id="activity" name="activity">
                      <option>1</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="level">Level<sup class="text-danger"> *</sup></label>
                    <select class="form-control" id="level" name="lavel">
                      <option>1</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="position_held">Position Held<sup class="text-danger"> *</sup></label>
                    <select class="form-control" id="position_held" name="position_held">
                      <option>1</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="level_achievement">Level of Achievement<sup class="text-danger"> *</sup></label>
                    <select class="form-control" id="level_achievement" name="level_achievement">
                      <option>1</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="from">From<sup class="text-danger"> *</sup></label>
                    <input type="text" class="form-control" id="from" name="from">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name_activity">Name of Activity/Organization/Employer<sup class="text-danger"> *</sup></label>
                    <input type="text" class="form-control" id="name_activity" name="name_activity">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="to">To<sup class="text-danger"> *</sup></label>
                    <input type="text" class="form-control" id="to" name="to">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="certificate_achievement">Certificate of Achievement<sup class="text-danger"> *</sup></label>
                    <input type="file" class="form-control" id="certificate_achievement" name="certificate_achievement">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <div class="row">
                <p class="text-md text-bold">Reference Contact</p>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="first_name_contact">First Name<sup class="text-danger"> *</sup></label>
                    <input type="text" class="form-control" id="first_name_contact" name="first_name_contact">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email_contact">Email<sup class="text-danger"> *</sup></label>
                    <input type="text" class="form-control" id="email_contact" name="email_contact">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="last_name_contact">Last Name<sup class="text-danger"> *</sup></label>
                    <input type="text" class="form-control" id="last_name_contact" name="last_name_contact">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="telephone_contact">Telephone<sup class="text-danger"> *</sup></label>
                    <input type="text" class="form-control" id="telephone_contact" name="telephone_contact">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="position_contact">Position of Contact Person<sup class="text-danger"> *</sup></label>
                    <input type="text" class="form-control" id="position_contact" name="position_contact">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-sm btn-success">Save Data</button>
              <button type="button" class="btn btn-link ml-auto text-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade modal-lg" id="modal-default3" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title text-uppercase" id="modal-title-default">List of Achievement - 3</h6>
          </div>
          <form action="/cahayascholarship/achievementlist/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
              <div class="row">
                <p class="text-md text-bold">Adding Achievement</p>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="activity">Activity<sup class="text-danger"> *</sup></label>
                    <select class="form-control" id="activity" name="activity">
                      <option>1</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="level">Level<sup class="text-danger"> *</sup></label>
                    <select class="form-control" id="level" name="lavel">
                      <option>1</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="position_held">Position Held<sup class="text-danger"> *</sup></label>
                    <select class="form-control" id="position_held" name="position_held">
                      <option>1</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="level_achievement">Level of Achievement<sup class="text-danger"> *</sup></label>
                    <select class="form-control" id="level_achievement" name="level_achievement">
                      <option>1</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="from">From<sup class="text-danger"> *</sup></label>
                    <input type="text" class="form-control" id="from" name="from">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name_activity">Name of Activity/Organization/Employer<sup class="text-danger"> *</sup></label>
                    <input type="text" class="form-control" id="name_activity" name="name_activity">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="to">To<sup class="text-danger"> *</sup></label>
                    <input type="text" class="form-control" id="to" name="to">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="certificate_achievement">Certificate of Achievement<sup class="text-danger"> *</sup></label>
                    <input type="file" class="form-control" id="certificate_achievement" name="certificate_achievement">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <div class="row">
                <p class="text-md text-bold">Reference Contact</p>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="first_name_contact">First Name<sup class="text-danger"> *</sup></label>
                    <input type="text" class="form-control" id="first_name_contact" name="first_name_contact">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email_contact">Email<sup class="text-danger"> *</sup></label>
                    <input type="text" class="form-control" id="email_contact" name="email_contact">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="last_name_contact">Last Name<sup class="text-danger"> *</sup></label>
                    <input type="text" class="form-control" id="last_name_contact" name="last_name_contact">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="telephone_contact">Telephone<sup class="text-danger"> *</sup></label>
                    <input type="text" class="form-control" id="telephone_contact" name="telephone_contact">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="position_contact">Position of Contact Person<sup class="text-danger"> *</sup></label>
                    <input type="text" class="form-control" id="position_contact" name="position_contact">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-sm btn-success">Save Data</button>
              <button type="button" class="btn btn-link ml-auto text-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div> --}}
  @endif
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
        timer: 3000
      })
    </script>
  @elseif (session('error'))
    <script>
      Swal.fire({
        icon: 'warning',
        title: 'Warning',
        title: "{{ session('error') }}",
        showConfirmButton: false,
        timer: 3000
      })
    </script>
  @endif

  <script>
    $(document).ready(function() {
      // get wrapper modal
      let wrapper = $('#modal-wrapper-default');
      let button = $('#add-button');

      console.log(wrapper);

      $(button).on('click', function(e) {
        e.preventDefault();
        var formTemplate = 
        `<div class="modal-body">
                <div class="row">
                  <p class="text-md text-bold">Adding Achievement</p>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="activity">Activity<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="activity" name="activity[]">
                      {{-- <select class="form-control" id="activity" name="activity[]">
                        <option>1</option>
                      </select> --}}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="level">Level<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="level" name="level[]">
                      {{-- <select class="form-control" id="level" name="level[]">
                        <option>1</option>
                      </select> --}}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="position_held">Position Held<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="position_held" name="position_held[]">
                      {{-- <select class="form-control" id="position_held" name="position_held[]">
                        <option>1</option>
                      </select> --}}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="level_achievement">Level of Achievement<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="level_achievement" name="level_achievement[]">
                      {{-- <select class="form-control" id="level_achievement" name="level_achievement[]">
                        <option>1</option>
                      </select> --}}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="from">From<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="from" name="from[]">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name_activity">Name of Activity/Organization/Employer<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="name_activity" name="name_activity[]">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="to">To<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="to" name="to[]">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="certificate_achievement">Certificate of Achievement<sup class="text-danger"> *</sup></label>
                      <input type="file" class="form-control" id="certificate_achievement" name="certificate_achievement[]">
                    </div>
                  </div>
                </div>
                <hr class="horizontal dark">
                <div class="row">
                  <p class="text-md text-bold">Reference Contact</p>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="first_name_contact">First Name<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="first_name_contact" name="first_name_contact[]">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email_contact">Email<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="email_contact" name="email_contact[]">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="last_name_contact">Last Name<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="last_name_contact" name="last_name_contact[]">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="telephone_contact">Telephone<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="telephone_contact" name="telephone_contact[]">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="position_contact">Position of Contact Person<sup class="text-danger"> *</sup></label>
                      <input required type="text" class="form-control" id="position_contact" name="position_contact[]">
                    </div>
                  </div>
                </div>
              </div>`;
        $('#modal-wrapper-default').append(formTemplate);
        // console.log('clicked');
      });
    });
  </script>
@endsection