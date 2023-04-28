@extends('layouts.main-home')

@section('content')
  <div class="container text-dark">
    <div class="row my-7">
      <div class="col-md-12">
        <p class="fs-1 fw-bold text-warning">Cahaya Scholarship</p>
        <div class="row">
          <div class="col-md-8">
            <p>Cahaya scholarship is a freshmen scholarship offered to support outstanding international students undertaking undergraduate study at the Itenas. Candidates will be considered and shortlisted for the scholarship through their applications for undergraduate admission to Itenas for Cahaya scholarship through website https://international-student.itenas.ac.id/cahayascholarship.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <p class="fs-3"><b class="fw-bold text-warning">Eligibility</b> Criteria</p>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body text-dark">
                    <ul>
                      <li>Be citizens of a country other than Indonesia and not a permanent resident of Indonesia</li>
                      <li>Graduates of 2023</li>
                      <li>Have strong leadership qualities and potential</li> 
                      <li>Present excellent co-curricular activities records</li> 
                      <li>Possess outstanding high school results</li> 
                      <li>Be applying for admission to a full-time undergraduate degree programme at Itenas</li> 
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <p class="fs-3"><b class="fw-bold text-warning">Term & </b> Conditions</p>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body text-dark">
                    <ul>
                      <li>The scholarship is offered to read a full-time undergraduate course at Itenas. The scholarship does not cover students in Double Degree, Joint Degree Programmes, and Master Degree Programme. </li>
                      <li>The scholarship is tenable for the normal course duration of the undergraduate course at Itenas.</li>
                      <li>Recipients of the scholarship (scholars) may not concurrently hold any other scholarship, fellowship, bursary, grant, award or allowance without prior approval from the University.</li> 
                      <li>The scholarship will be monitored and renewed every semester provided the scholar maintains a Cumulative Average Point (CAP) of at least 3.5 (or equivalent) and good conduct.</li> 
                      <li>Itenas does not guarantee and/or provide scholars with employment upon graduation.</li> 
                      <li>If the scholar decides to withdraw from the University and/or terminate the scholarship prematurely, the University reserves the right to impose repayment of all scholarship monies disbursed to the scholar. </li> 
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <p class="fs-3"><b class="fw-bold text-warning">Requirements</b></p>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body text-dark">
                    <ul>
                      <li>Hold a High School degree (please provide the scanned degree certificate and academic transcripts in English). Please be advised that bachelor degree holder is not eligible to apply for the bachelor Degree scholarship.</li>
                      <li>Have the English Proficiency Test Score (the certificate must be obtained within the last 2 Years). </li>
                      <li>Provide Academic Recommendation Letter from previous schools.</li> 
                      <li>Prove of citizenship (Official Passport or Personal ID). </li> 
                      <li>Complete the online application form in https://international-student.itenas.ac.id/cahayascholarship</li> 
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <p class="fs-3"><b class="fw-bold text-warning">Application & </b>Shortlisting Process</p>
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body text-dark">
                    <ul>
                      <li>Application process conducted online through the Cahaya Scholarship website https://international-student.itenas.ac.id/cahayascholarship. During the application process, please submit all the required documents must be written or officially translated In English.</li>
                      <li>Applicants will be required to provide a submission furnishing their co-curricular activity and other achievements, and a personal statement. </li>
                      <li>Applicants will be assessed on their suitability for the scholarship, based on the strength of their applications and/or their performance in the scholarship selection interview(s), if shortlisted. </li> 
                      <li>Applicants shortlisted for the selection interview(s) will be informed via e-mail. Selection interviews will be conducted in mid-June, and shortlisted candidates will be informed of the scholarship outcomes by early July.</li> 
                      <li>Itenas reserves the right not to award any scholarship if there are no candidates of sufficient merit. The decision of the selection committee is final. Enquiries or disputes surrounding its decisions will not be entertained. </li> 
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <a href="/cahayascholarship/register" target="_blank" rel="noopener noreferrer">
              <div class="alert alert-warning text-center fw-bold text-light" role="alert">
                APPLY NOW
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection