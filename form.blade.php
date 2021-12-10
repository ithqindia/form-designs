@extends('layouts.main')
@section('form')
<div class="accordion container" id="accordionExample">
    <h3>Education Details</h3>
    {{-- 10th accordion --}}
    <div class="">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingone_ssc">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          10th
        </button>
      </h2>
      <div id="collapseOne_ssc" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <form class="row g-3">
                <div class="col-md-12">
                  <label for="inputCollege" class="form-label">School</label>
                  <input type="text" class="form-control" id="inputCollege_ssc" name="school">
                </div>
                <div class="col-md-12">
                  <label for="inputUniversity" class="form-label">State Board</label>
                  <input type="text" class="form-control" id="inputUniversity_ssc" name="sscBoard">
                </div>
                <div class="col-12">
                  <label for="inputAggregates" class="form-label">Percentage</label>
                  <input type="text" class="form-control" id="inputAggregates_ssc" placeholder="Aggregates" name="sscPercentage">
                </div>
                <div class="col-12">
                    <label for="inputYearfrom" class="form-label">Year Form</label>
                    <input type="text" class="form-control" id="inputYearfrom_ssc" placeholder="Year Form" name="schoolYearform">
                  </div>
                  <div class="col-12">
                    <label for="inputYearto" class="form-label">Year To</label>
                    <input type="text" class="form-control" id="inputYearto_ssc" placeholder="Year To" name="schoolYearto">
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
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          12th
        </button>
      </h2>
      <div id="collapseTwo_hsc" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <form class="row g-3">
                <div class="col-md-12">
                  <label for="inputCollege" class="form-label">College</label>
                  <input type="text" class="form-control" id="inputCollege_hsc" name="hscCollege">
                </div>
                <div class="col-md-12">
                  <label for="inputUniversity" class="form-label">HSC Board</label>
                  <input type="text" class="form-control" id="inputUniversity_hsc" name="hscBoard">
                </div>
                <div class="col-12">
                  <label for="inputAggregates" class="form-label">Percentage</label>
                  <input type="text" class="form-control" id="inputAggregates_hsc" placeholder="Percentage" name="hscPercentage">
                </div>
                <div class="col-12">
                    <label for="inputYearfrom" class="form-label">Year Form</label>
                    <input type="text" class="form-control" id="inputYearfrom_hsc" placeholder="Year Form" name="hscYearform">
                  </div>
                  <div class="col-12">
                    <label for="inputYearto" class="form-label">Year To</label>
                    <input type="text" class="form-control" id="inputYearto_hsc" placeholder="Year To" name="hscYearto">
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
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Graduation
          </button>
        </h2>
        <div id="collapseOne_graduation" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
              <form class="row g-3">
                  <div class="col-md-12">
                    <label for="inputCollege" class="form-label">College</label>
                    <input type="text" class="form-control" id="inputCollege_graduation" name="graduationCollege">
                  </div>
                  <div class="col-md-12">
                    <label for="inputUniversity" class="form-label">University</label>
                    <input type="text" class="form-control" id="inputUniversity_graduation" name="graduationUniversity">
                  </div>
                  <div class="col-12">
                    <label for="inputAggregates" class="form-label">Aggregates</label>
                    <input type="text" class="form-control" id="inputAggregates_graduation" placeholder="Aggregates" name="graduationAggregates">
                  </div>
                  <div class="col-12">
                      <label for="inputYearfrom" class="form-label">Year Form</label>
                      <input type="text" class="form-control" id="inputYearfrom_graduation" placeholder="Year Form" name="graduationYearfrom">
                    </div>
                    <div class="col-12">
                      <label for="inputYearto" class="form-label">Year To</label>
                      <input type="text" class="form-control" id="inputYearto_graduation" placeholder="Year To" name="graduationYearto">
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
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Diploma
          </button>
        </h2>
        <div id="collapseOne_diploma" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
              <form class="row g-3">
                  <div class="col-md-12">
                    <label for="inputCollege" class="form-label">College</label>
                    <input type="text" class="form-control" id="inputCollege_diploma" name="diplomaCollege">
                  </div>
                  <div class="col-md-12">
                    <label for="inputUniversity" class="form-label">University</label>
                    <input type="text" class="form-control" id="inputUniversity_diploma" name="diplomaUniversity">
                  </div>
                  <div class="col-12">
                    <label for="inputAggregates" class="form-label">Aggregates</label>
                    <input type="text" class="form-control" id="inputAggregates_diploma" placeholder="Aggregates" name="diplomaAggregates">
                  </div>
                  <div class="col-12">
                      <label for="inputYearfrom" class="form-label">Year Form</label>
                      <input type="text" class="form-control" id="inputYearfrom_diploma" placeholder="Year Form" name="diplomaYearform">
                    </div>
                    <div class="col-12">
                      <label for="inputYearto" class="form-label">Year To</label>
                      <input type="text" class="form-control" id="inputYearto_diploma" placeholder="Year To" name="diplomaYearto">
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
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Post Graduation
          </button>
        </h2>
        <div id="collapseOne_postGraduation" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
              <form class="row g-3">
                  <div class="col-md-12">
                    <label for="inputCollege" class="form-label">College</label>
                    <input type="text" class="form-control" id="inputCollege_postGraduation" name="postgraduationCollege">
                  </div>
                  <div class="col-md-12">
                    <label for="inputUniversity" class="form-label">University</label>
                    <input type="text" class="form-control" id="inputUniversity_postGraduation" name="postgraduationUniversity">
                  </div>
                  <div class="col-12">
                    <label for="inputAggregates" class="form-label">Aggregates</label>
                    <input type="text" class="form-control" id="inputAggregates_postGraduation" placeholder="Aggregates" name="postgraduationAggregates">
                  </div>
                  <div class="col-12">
                      <label for="inputYearfrom" class="form-label">Year Form</label>
                      <input type="text" class="form-control" id="inputYearfrom_postGraduation" placeholder="Year Form" name="postgraduationYearfrom">
                    </div>
                    <div class="col-12">
                      <label for="inputYearto" class="form-label">Year To</label>
                      <input type="text" class="form-control" id="inputYearto_postGraduation" placeholder="Year To" name="postgraduationYearto">
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
