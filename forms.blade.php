@extends('layouts.main')
@section('home', 'form-page')
@section('container')
<section>
    {{--  permananat address form --}}
    <div class="container permanant_address">
        <form class="row g-3 ">
            <h4> Address(permanant)</h4>
            <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="permanant_address" name="permanant_address">
            </div>
            <div class="col-12">
                <label for="apt" class="form-label">Apt/Suit/etc</label>
                <input type="text" class="form-control" id="permanant_apt" name="permanant_apt">
            </div>
            <div class="col-12">
                <label for="town" class="form-label">City/Town</label>
                <input type="text" class="form-control" id="permanant_town" name="permanant_town" required>
            </div>
            <div class="col-12">
                <label for="pin" class="form-label">Pincode</label>
                <input type="number" class="form-control" id="permanant_pin" name="permanant_pin"
                    placeholder="****" required>
            </div>
            <div class="col-12">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="permanant_state" name="permanant_state" required>
            </div>
            <div class="col-12">
                <label for="country" class="form-label">country</label>
                <input type="text" class="form-control" id="permanant_country" name="permanant_country" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" id=permanant_submit> Submit</button>
            </div>
        </form>
    </div>
     {{--  local address form --}}
    <div class="container mt-3 local_address">
        <h4> Local Address</h4>
        <div class="form-check mt-5">
            <input class="form-check-input rbtn" type="radio" name="radiobtn" id="same"
                value="Same as above">
            <label class="form-check-label" for="flexRadioDefault2">
                Same as above
            </label>
        </div>
        <div class="form-check mt-2">
            <input class="form-check-input rbtn" type="radio" name="radiobtn" id="new" value="usenew"
                checked>
            <label class="form-check-label" for="flexRadioDefault2">
                use new
            </label>
        </div>
        {{-- form --}}
        <div>
        </div>
        <form class="row g-3 mt-5" id="hide">
            <h4> local</h4>
            <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="local_address">
            </div>
            <div class="col-12">
                <label for="apt" class="form-label">Apt/Suit/etc</label>
                <input type="text" class="form-control" id="local_apt" name="local_apt">
            </div>
            <div class="col-12">
                <label for="town" class="form-label">City/Town</label>
                <input type="text" class="form-control" id="local_town" name="local_town" required>
            </div>
            <div class="col-12">
                <label for="pin" class="form-label">Pincode</label>
                <input type="number" class="form-control" id="local_pin" name="local_pin" placeholder="****"
                    required>
            </div>
            <div class="col-12">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="local_state" name="local_state" required>
            </div>
            <div class="col-12">
                <label for="country" class="form-label">country</label>
                <input type="text" class="form-control" id="local_country" name="local_country" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" id="local_submit"> Submit</button>
            </div>
        </form>
    </div>
</section>
{{-- script --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $("[name='radiobtn']").click(function(event) {
        if ($('#new').is(":checked")) {
            $('#hide').show();
        } else {
            $('#hide').hide();
        }
    });
</script>
@endsection
