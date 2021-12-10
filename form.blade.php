@extends('layouts.main')
@section('form')

    <div class="container">
        <h3>Basic Information</h3>
        <form>
        <div class="col-12">
          <label for="fname" class="form-label">First Name</label>
          <input type="text" class="form-control" name="first_name" id="fname" required>
        </div>
        <div class="col-12">
          <label for="lname" class="form-label">Last name</label>
          <input type="text" class="form-control" name="last_name" id="lname" required>
        </div>
        <div class="col-12">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="col-12">
          <label for="mobile" class="form-label">Mobile</label>
          <input type="number" class="form-control" name="mobile" id="mobile" required>
        </div>
        <div class="col-12">
          <label for="phone" class="form-label">Phone</label>
          <input type="number" class="form-control" name="phone" id="phone">
        </div>
        <div class="col-12">
          <label for="whatsappid" class="form-label">Whatsapp Number</label>
          <input type="text" class="form-control" name="whatsapp_number" id="whatsappid" required>
        </div>
        <div class="col-12">
         <label for="skypeid" class="form-label">Skype ID</label>
         <input type="text" class="form-control" name="skype_id" id="skypeid">
        </div>
        <div class="col-12">
         <label for="zoomid" class="form-label">Zoom ID</label>
         <input type="text" class="form-control" name="zoom_id" id="zoomid">
        </div>
        <div class="col-12">
         <label for="other" class="form-label">Other</label>
         <input type="text" class="form-control" name="other_id" id="other">
        </div>

        <div class="col-12 mt-3">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
@endsection
