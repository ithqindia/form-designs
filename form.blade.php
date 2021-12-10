@extends('layouts.main')
@section('form')

    <div class="container">
        <h3>Apply to session</h3>

        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputDate" class="form-label">Date</label>
                <input type="date" class="form-control" name="session_date" id="inputDate">
            </div>
            <div class="col-md-6">
                <label for="inputTime" class="form-label">Time</label>
                <input type="time" class="form-control" name="session_time" id="inputTime">
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Session Type</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="meeting_name" id="input_Radio" value="online"
                            checked>
                        <label class="form-check-label" for="input_Radio">
                            Online
                        </label>
                    </div>
                    <div id="online_Radio">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="zoom_name" id="gridRadios2" value="zoom">
                            <label class="form-check-label" for="gridRadios3">
                                Zoom
                            </label>
                            <input type="text" class="form-control" name="zoom_name" id="inputtext">
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="skype_name" id="gridRadios3" value="skype">
                            <label class="form-check-label" for="gridRadios3">
                                Skype
                            </label>
                            <input type="text" class="form-control" name="skype_name" id="inputtext1">
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="whatsapp_name" id="gridRadios4" value="whatsapp">
                            <label class="form-check-label" for="gridRadios3">
                                WhatsApp
                            </label>
                            <input type="text" class="form-control" name="whatsapp_name" id="inputtext2">
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="other_name" id="gridRadios5" value="other">
                            <label class="form-check-label" for="gridRadios3">
                                Other
                            </label>
                            <input type="text" class="form-control" name="other_name" id="inputtext3">
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="meeting_name" id="gridRadios6" value="offline">
                        <label class="form-check-label" for="gridRadios2">
                            Offline
                        </label>
                    </div>

                </div>
            </fieldset>


            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        //  $('#hide').hide();
        $("[name='meeting_name']").click(function(event) {
            if ($('#input_Radio').is(":checked")) {
                $('#online_Radio').show();
            } else {
                $('#online_Radio').hide();
            }
        });
    </script>
@endsection
