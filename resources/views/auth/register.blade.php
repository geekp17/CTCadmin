@extends('master')

@section('content')
<form class="form-horizontal" method="post" action="{{ url('/register')}}">
  {{ csrf_field() }}
  <div class="form-group">
    <label class="control-label col-sm-2">First Name</label>
    <div class="col-sm-10">
      <input type="text" name="firstName" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Last Name</label>
    <div class="col-sm-10">
      <input type="text" name="lastName" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Mobile No</label>
    <div class="col-sm-10">
      <input type="text" name="mobileNo" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Re-Enter Password</label>
    <div class="col-sm-10">
      <input type="password" name="password_confirmation" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Address</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="4" cols="50" name="address"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-2">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
@if (count($errors) > 0)
    <div class="row">
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    </div>
@endif
@endsection
