@extends('layouts.main')
@section('form')
<div class="accordion container" id="accordion_container">
    <h3>Education Details</h3>
    {{-- 10th accordion --}}
    <div class="">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingone_ssc">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ssc_details" aria-expanded="true" aria-controls="collapseOne_ssc">
          10th
        </button>
      </h2>
      <div id="collapseOne_ssc" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accord_ssc">
        <div class="accordion-body">
            <form class="row g-3">
                <div class="col-md-12">
                  <label for="inputCollege" class="form-label">School</label>
                  <input type="text" class="form-control" id="input_college_ssc" name="ssc_school">
                </div>
                <div class="col-md-12">
                  <label for="inputUniversity" class="form-label">State Board</label>
                  <input type="text" class="form-control" id="input_university_ssc" name="ssc_board">
                </div>
                <div class="col-12">
                  <label for="inputAggregates" class="form-label">Percentage</label>
                  <input type="text" class="form-control" id="input_aggregates_ssc" placeholder="Aggregates" name="ssc_percentage">
                </div>
                <div class="col-12">
                    <label for="inputYearfrom" class="form-label">Year Form</label>
                    <input type="text" class="form-control" id="input_year_from_ssc" placeholder="Year Form" name="school_year_form">
                  </div>
                  <div class="col-12">
                    <label for="inputYearto" class="form-label">Year To</label>
                    <input type="text" class="form-control" id="input_year_to_ssc" placeholder="Year To" name="school_year_to">
                  </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div><br>

    {{-- 12th accordion --}}
    <div class = "">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo_hsc">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hsc_details" aria-expanded="false" aria-controls="collapseTwo_hsc">
          12th
        </button>
      </h2>
      <div id="collapseTwo_hsc" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accord_ssc">
        <div class="accordion-body">
            <form class="row g-3">
                <div class="col-md-12">
                  <label for="inputCollege" class="form-label">College</label>
                  <input type="text" class="form-control" id="input_college_hsc" name="hsc_college">
                </div>
                <div class="col-md-12">
                  <label for="inputUniversity" class="form-label">HSC Board</label>
                  <input type="text" class="form-control" id="input_university_hsc" name="hsc_board">
                </div>
                <div class="col-12">
                  <label for="inputAggregates" class="form-label">Percentage</label>
                  <input type="text" class="form-control" id="input_aggregates_hsc" placeholder="Percentage" name="hsc_percentage">
                </div>
                <div class="col-12">
                    <label for="inputYearfrom" class="form-label">Year Form</label>
                    <input type="text" class="form-control" id="input_year_from_hsc" placeholder="Year Form" name="hsc_year_form">
                  </div>
                  <div class="col-12">
                    <label for="inputYearto" class="form-label">Year To</label>
                    <input type="text" class="form-control" id="input_year_to_hsc" placeholder="Year To" name="hsc_year_to">
                  </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
          </div>
        </div>
       </div>
    </div><br>

    {{-- Graduation accordion --}}
    <div class = "">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne_graduation">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#graduation_details" aria-expanded="true" aria-controls="collapseOne_graduation">
            Graduation
          </button>
        </h2>
        <div id="collapseOne_graduation" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accord_ssc">
          <div class="accordion-body">
              <form class="row g-3">
                  <div class="col-md-12">
                    <label for="inputCollege" class="form-label">College</label>
                    <input type="text" class="form-control" id="input_college_graduation" name="graduation_college">
                  </div>
                  <div class="col-md-12">
                    <label for="inputUniversity" class="form-label">University</label>
                    <input type="text" class="form-control" id="input_university_graduation" name="graduation_university">
                  </div>
                  <div class="col-12">
                    <label for="inputAggregates" class="form-label">Aggregates</label>
                    <input type="text" class="form-control" id="input_aggregates_graduation" placeholder="Aggregates" name="graduation_aggregates">
                  </div>
                  <div class="col-12">
                      <label for="inputYearfrom" class="form-label">Year Form</label>
                      <input type="text" class="form-control" id="input_year_from_graduation" placeholder="Year Form" name="graduation_year_from">
                    </div>
                    <div class="col-12">
                      <label for="inputYearto" class="form-label">Year To</label>
                      <input type="text" class="form-control" id="input_year_to_graduation" placeholder="Year To" name="graduation_year_to">
                    </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
    </div><br>
    {{-- diploma accordion --}}
    <div class="">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne_diploma">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#diploma_details" aria-expanded="true" aria-controls="collapseOne_diploma">
            Diploma
          </button>
        </h2>
        <div id="collapseOne_diploma" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accord_ssc">
          <div class="accordion-body">
              <form class="row g-3">
                  <div class="col-md-12">
                    <label for="inputCollege" class="form-label">College</label>
                    <input type="text" class="form-control" id="input_college_diploma" name="diploma_college">
                  </div>
                  <div class="col-md-12">
                    <label for="inputUniversity" class="form-label">University</label>
                    <input type="text" class="form-control" id="input_university_diploma" name="diploma_university">
                  </div>
                  <div class="col-12">
                    <label for="inputAggregates" class="form-label">Aggregates</label>
                    <input type="text" class="form-control" id="input_aggregates_diploma" placeholder="Aggregates" name="diploma_aggregates">
                  </div>
                  <div class="col-12">
                      <label for="inputYearfrom" class="form-label">Year Form</label>
                      <input type="text" class="form-control" id="input_year_from_diploma" placeholder="Year Form" name="diploma_year_form">
                    </div>
                    <div class="col-12">
                      <label for="inputYearto" class="form-label">Year To</label>
                      <input type="text" class="form-control" id="input_year_to_diploma" placeholder="Year To" name="diploma_year_to">
                    </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
    </div><br>

    {{-- Post Graduation accordion --}}
    <div clas="">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne_post_graduation">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#post_graduation_details" aria-expanded="true" aria-controls="collapseOne_post_graduation">
            Post Graduation
          </button>
        </h2>
        <div id="collapseOne_post_graduation" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accord_ssc">
          <div class="accordion-body">
              <form class="row g-3">
                  <div class="col-md-12">
                    <label for="inputCollege" class="form-label">College</label>
                    <input type="text" class="form-control" id="input_college_post_graduation" name="post_graduation_college">
                  </div>
                  <div class="col-md-12">
                    <label for="inputUniversity" class="form-label">University</label>
                    <input type="text" class="form-control" id="input_university_post_graduation" name="post_graduation_university">
                  </div>
                  <div class="col-12">
                    <label for="inputAggregates" class="form-label">Aggregates</label>
                    <input type="text" class="form-control" id="input_aggregates_post_graduation" placeholder="Aggregates" name="post_graduation_aggregates">
                  </div>
                  <div class="col-12">
                      <label for="inputYearfrom" class="form-label">Year Form</label>
                      <input type="text" class="form-control" id="input_year_from_post_graduation" placeholder="Year Form" name="post_graduation_year_from">
                    </div>
                    <div class="col-12">
                      <label for="inputYearto" class="form-label">Year To</label>
                      <input type="text" class="form-control" id="input_year_to_post_graduation" placeholder="Year To" name="post_graduation_year_to">
                    </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
    </div>
 </div>
 @endsection
