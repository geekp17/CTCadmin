@extends('master')

@section('content')
<div class="row">
	<div class="col-sm-offset-2 col-sm-10">
		<h1>Clubber Registration Form
		</h2>
	</div>
</div>
<form class="form-horizontal" method="post" action="{{ action('ClubberController@insert')}}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label class="control-label col-sm-2">First Name</label>
			<div class="col-sm-10">
				<input class="form-control" name="firstName" type="text">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Last Name</label>
				<div class="col-sm-10">
					<input class="form-control" name="lastName" type="text">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Mobile Number</label>
					<div class="col-sm-10">
						<input class="form-control" name="mobileNo" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Date of Birth</label>
						<div class="col-sm-10">
							<input class="form-control" name="dob" type="date">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Address</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="4" cols="50" name="address"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Reference Friend</label>
							<div class="col-sm-10">
								<input class="form-control" name="lugger_id" type="text">
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
@if (session('status'))
    <div class="row">
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    </div>
@endif
@stop
