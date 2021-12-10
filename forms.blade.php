@extends('layouts.main')
@section('home', 'form-page')
@section('container')
    <section>
        {{-- permananat address form --}}
        <div class="container Permanent_address">
            <form class="row g-3 ">
                <h4> Permanent Address</h4>
                <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="permanent_address" name="permanaet_address">
                </div>
                <div class="col-12">
                    <label for="apt" class="form-label">Apartment, Suite, etc</label>
                    <input type="text" class="form-control" id="permanent_apartment" name="permanent_apt">
                </div>
                <div class="col-12">
                    <label for="city" class="form-label">City/Town</label>
                    <input type="text" class="form-control" id="permanent_city" name="permanent_city" required>
                </div>
                <div class="col-12">
                    <label for="pin" class="form-label">Pincode</label>
                    <input type="number" class="form-control" id="permanent_pin" name="permanent_pin" required>
                </div>
                <div class="col-12">
                    <label for="state" class="form-label">State</label>
                    <input type="text" class="form-control" id="permanent_state" name="permanent_state" required>
                </div>
                <div class="col-12">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" class="form-control" id="permanent_country" name="permanent_country" required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" id="permanent_submit"> Submit</button>
                </div>
            </form>
        </div>
        {{-- local address form --}}
        <div class="container mt-3 local_address">
            <h4> Local Address</h4>
            <div class="form-check mt-5">
                <input class="form-check-input rbtn" type="radio" name="radio_button" id="same_address"
                    value="Same as above">
                <label class="form-check-label" for="flexRadioDefault2">
                    Same as above
                </label>
            </div>
            <div class="form-check mt-2">
                <input class="form-check-input rbtn" type="radio" name="radio_button" id="new_address" value="usenew"
                    checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Use new address
                </label>
            </div>
            {{-- form --}}
            <div>
            </div>
            <form class="row g-3 mt-5" id="local_address">
                <h4>Local Address</h4>
                <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="local_address">
                </div>
                <div class="col-12">
                    <label for="apt" class="form-label">Apartment, Suite, etc </label>
                    <input type="text" class="form-control" id="local_apt" name="local_apt">
                </div>
                <div class="col-12">
                    <label for="city" class="form-label">City/Town</label>
                    <input type="text" class="form-control" id="local_city" name="local_city" required>
                </div>
                <div class="col-12">
                    <label for="pin" class="form-label">Pincode</label>
                    <input type="number" class="form-control" id="local_pin" name="local_pin" required>
                </div>
                <div class="col-12">
                    <label for="state" class="form-label">State</label>
                    <input type="text" class="form-control" id="local_state" name="local_state" required>
                </div>
                <div class="col-12">
                    <label for="country" class="form-label">Country</label>
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
        $("[name='radio_button']").click(function(event) {
            if ($('#new_address').is(":checked")) {
                $('#local_address').show();
            } else {
                $('#local_address').hide();
            }
        });
    </script>
@endsection
