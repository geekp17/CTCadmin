@extends('master')

@section('content')
<div class="row">
  <div class="col-sm-offset-2 col-sm-10">
      <h1>Lugger Edit Form</h2>
  </div>
</div>
<form class="form-horizontal" method="post" action="{{ action('ClubberController@levelUp') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<form class="form-horizontal" method="post" action="{{ action('LuggerController@insert') }}">
			<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
			<div class="form-group">
				<label class="control-label col-sm-2">First Name</label>
				<div class="col-sm-10">
					<input class="form-control" name="firstName" type="text" value="{{ucfirst(strtolower($lugger->firstName))}}" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Last Name</label>
					<div class="col-sm-10">
						<input class="form-control" name="lastName" type="text" value="{{$lugger->lastName}}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Mobile Number</label>
						<div class="col-sm-10">
							<input class="form-control" name="mobileNo" type="text" value="{{$lugger->mobileNo}}">
							</div>
						</div>
            <div class="form-group">
  						<label class="control-label col-sm-2">Instagram Username</label>
  						<div class="col-sm-10">
  							<input class="form-control" name="instagram" type="text" value="{{$lugger->instagram}}">
  							</div>
  						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Date of Birth</label>
							<div class="col-sm-10">
								<input class="form-control" name="dob" type="date" value="{{$lugger->dob}}">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Address</label>
								<div class="col-sm-10">
									<textarea class="form-control" rows="4" cols="50" name="address">{{$lugger->address}}</textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Lug Leader</label>
								<div class="col-sm-10">
									<input class="form-control" name="user_id" type="text" value="{{ Auth::id()}}" readonly>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-2">
										<button type="submit" class="btn btn-default">Submit</button>
									</div>
								</div>
							</form>
@stop
