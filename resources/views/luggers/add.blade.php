@extends('master')

@section('content')
<div class="row">
  <div class="col-sm-offset-2 col-sm-10">
      <h1>Lugger Registration Form</h1>
  </div>
</div>
</div>
<form class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2">Lug Leader</label>
    <div class="col-sm-10">
      <input class="form-control" id="user_id" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Clubber Id</label>
    <div class="col-sm-10">
      <input class="form-control" id="clubber_id" type="text">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
<div class="row">
  <div class="col-sm-offset-6 col-sm-6">
      <h2>OR</h2>
  </div>
</div>
<form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2">First Name</label>
      <div class="col-sm-10">
        <input class="form-control" id="firstName" type="text">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Last Name</label>
      <div class="col-sm-10">
        <input class="form-control" id="lastName" type="text">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Mobile Number</label>
      <div class="col-sm-10">
        <input class="form-control" id="mobileNo" type="text">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Date of Birth</label>
      <div class="col-sm-10">
        <input class="form-control" id="dob" type="date">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Address</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="4" cols="50" id="address"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Lug Leader</label>
      <div class="col-sm-10">
        <input class="form-control" id="user_id" type="text">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-2">
          <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
</form>
@stop
