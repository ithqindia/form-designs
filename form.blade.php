@extends('layouts.main')
@section('form')
<div class="accordion container" id="accordionExample">
    <h3>Education Details</h3>
    {{-- 10th accordion --}}
    <div class="">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingone_ssc">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ssc_details" aria-expanded="true" aria-controls="collapseOne">
          10th
        </button>
      </h2>
      <div id="collapseOne_ssc" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <form class="row g-3">
                <div class="col-md-12">
                  <label for="inputCollege" class="form-label">School</label>
                  <input type="text" class="form-control" id="inputCollege_ssc" name="ssc_school">
                </div>
                <div class="col-md-12">
                  <label for="inputUniversity" class="form-label">State Board</label>
                  <input type="text" class="form-control" id="inputUniversity_ssc" name="ssc_board">
                </div>
                <div class="col-12">
                  <label for="inputAggregates" class="form-label">Percentage</label>
                  <input type="text" class="form-control" id="inputAggregates_ssc" placeholder="Aggregates" name="ssc_percentage">
                </div>
                <div class="col-12">
                    <label for="inputYearfrom" class="form-label">Year Form</label>
                    <input type="text" class="form-control" id="inputYearfrom_ssc" placeholder="Year Form" name="school_yearform">
                  </div>
                  <div class="col-12">
                    <label for="inputYearto" class="form-label">Year To</label>
                    <input type="text" class="form-control" id="inputYearto_ssc" placeholder="Year To" name="school_yearto">
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
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hsc_details" aria-expanded="false" aria-controls="collapseTwo">
          12th
        </button>
      </h2>
      <div id="collapseTwo_hsc" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <form class="row g-3">
                <div class="col-md-12">
                  <label for="inputCollege" class="form-label">College</label>
                  <input type="text" class="form-control" id="inputCollege_hsc" name="hsc_college">
                </div>
                <div class="col-md-12">
                  <label for="inputUniversity" class="form-label">HSC Board</label>
                  <input type="text" class="form-control" id="inputUniversity_hsc" name="hsc_board">
                </div>
                <div class="col-12">
                  <label for="inputAggregates" class="form-label">Percentage</label>
                  <input type="text" class="form-control" id="inputAggregates_hsc" placeholder="Percentage" name="hsc_percentage">
                </div>
                <div class="col-12">
                    <label for="inputYearfrom" class="form-label">Year Form</label>
                    <input type="text" class="form-control" id="inputYearfrom_hsc" placeholder="Year Form" name="hsc_yearform">
                  </div>
                  <div class="col-12">
                    <label for="inputYearto" class="form-label">Year To</label>
                    <input type="text" class="form-control" id="inputYearto_hsc" placeholder="Year To" name="hsc_yearto">
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
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#graduation_details" aria-expanded="true" aria-controls="collapseOne">
            Graduation
          </button>
        </h2>
        <div id="collapseOne_graduation" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
              <form class="row g-3">
                  <div class="col-md-12">
                    <label for="inputCollege" class="form-label">College</label>
                    <input type="text" class="form-control" id="inputCollege_graduation" name="graduation_college">
                  </div>
                  <div class="col-md-12">
                    <label for="inputUniversity" class="form-label">University</label>
                    <input type="text" class="form-control" id="inputUniversity_graduation" name="graduation_university">
                  </div>
                  <div class="col-12">
                    <label for="inputAggregates" class="form-label">Aggregates</label>
                    <input type="text" class="form-control" id="inputAggregates_graduation" placeholder="Aggregates" name="graduation_aggregates">
                  </div>
                  <div class="col-12">
                      <label for="inputYearfrom" class="form-label">Year Form</label>
                      <input type="text" class="form-control" id="inputYearfrom_graduation" placeholder="Year Form" name="graduation_yearfrom">
                    </div>
                    <div class="col-12">
                      <label for="inputYearto" class="form-label">Year To</label>
                      <input type="text" class="form-control" id="inputYearto_graduation" placeholder="Year To" name="graduation_yearto">
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
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#diploma_details" aria-expanded="true" aria-controls="collapseOne">
            Diploma
          </button>
        </h2>
        <div id="collapseOne_diploma" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
              <form class="row g-3">
                  <div class="col-md-12">
                    <label for="inputCollege" class="form-label">College</label>
                    <input type="text" class="form-control" id="inputCollege_diploma" name="diploma_college">
                  </div>
                  <div class="col-md-12">
                    <label for="inputUniversity" class="form-label">University</label>
                    <input type="text" class="form-control" id="inputUniversity_diploma" name="diploma_university">
                  </div>
                  <div class="col-12">
                    <label for="inputAggregates" class="form-label">Aggregates</label>
                    <input type="text" class="form-control" id="inputAggregates_diploma" placeholder="Aggregates" name="diploma_aggregates">
                  </div>
                  <div class="col-12">
                      <label for="inputYearfrom" class="form-label">Year Form</label>
                      <input type="text" class="form-control" id="inputYearfrom_diploma" placeholder="Year Form" name="diploma_yearform">
                    </div>
                    <div class="col-12">
                      <label for="inputYearto" class="form-label">Year To</label>
                      <input type="text" class="form-control" id="inputYearto_diploma" placeholder="Year To" name="diploma_yearto">
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
        <h2 class="accordion-header" id="headingOne_postGraduation">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#postgraduation_details" aria-expanded="true" aria-controls="collapseOne">
            Post Graduation
          </button>
        </h2>
        <div id="collapseOne_postGraduation" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
              <form class="row g-3">
                  <div class="col-md-12">
                    <label for="inputCollege" class="form-label">College</label>
                    <input type="text" class="form-control" id="inputCollege_postGraduation" name="postgraduation_college">
                  </div>
                  <div class="col-md-12">
                    <label for="inputUniversity" class="form-label">University</label>
                    <input type="text" class="form-control" id="inputUniversity_postGraduation" name="postgraduation_university">
                  </div>
                  <div class="col-12">
                    <label for="inputAggregates" class="form-label">Aggregates</label>
                    <input type="text" class="form-control" id="inputAggregates_postGraduation" placeholder="Aggregates" name="postgraduation_aggregates">
                  </div>
                  <div class="col-12">
                      <label for="inputYearfrom" class="form-label">Year Form</label>
                      <input type="text" class="form-control" id="inputYearfrom_postGraduation" placeholder="Year Form" name="postgraduation_yearfrom">
                    </div>
                    <div class="col-12">
                      <label for="inputYearto" class="form-label">Year To</label>
                      <input type="text" class="form-control" id="inputYearto_postGraduation" placeholder="Year To" name="postgraduation_yearto">
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
