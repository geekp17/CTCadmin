@extends('master')

@section('content')
<form class="form-horizontal" method="post" action="{{url(('/log/insertEffort'))}}"
<div class="form-group">
  <label class="control-label col-sm-2">Effort Made to Meet</label>
  <div class="col-sm-10">
    <input class="form-control" name="efforts" type="text">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-2">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
@stop
