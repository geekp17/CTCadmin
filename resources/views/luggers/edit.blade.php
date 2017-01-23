<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
					<title>CTC Admin</title>
				</head>
				<body>
					<div class="container-fluid">
<div class="row">
  <div class="col-sm-offset-2 col-sm-10">
      <h1>Lugger Edit Form</h2>
  </div>
</div>
		<form class="form-horizontal" method="post" action="{{ url('/lugger/update') }}">
			<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
      <input type="hidden" name="lugger_id" value="{{ $lugger->id }}">
      <input type="hidden" name="user_id" value="{{ $lugger->User->id }}">
			<div class="form-group">
				<label class="control-label col-sm-2">First Name</label>
				<div class="col-sm-10">
					<input class="form-control" name="firstName" type="text" value="{{ucfirst(strtolower($lugger->firstName))}}" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Last Name</label>
					<div class="col-sm-10">
						<input class="form-control" name="lastName" type="text" value="{{ucfirst(strtolower($lugger->lastName))}}">
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
    						<label class="control-label col-sm-2">Snapchat Username</label>
    						<div class="col-sm-10">
    							<input class="form-control" name="snapchat" type="text" value="{{$lugger->snapchat}}">
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
            </div>
          </body>
        </html>
