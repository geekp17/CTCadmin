@extends('master')

@section('content')
<div class="row">
  <div class="col-sm-offset-2 col-sm-10">
      <h1>Lugger Log</h2>
  </div>
</div>
<form class="form-horizontal" method="post" action="{{ url('log\insert')}}">

  <div class="form-group">
    <label class="control-label col-sm-2">Lugger's Name</label>
    <div class="col-sm-10">
      <input class="form-control" name="lugger_id" value='{{ $log->Lugger()->first_name}}'>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Effort Made to Meet</label>
    <div class="col-sm-10">
      <input class="form-control" name="efforts" type="text" >
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Date</label>
    <div class="col-sm-10">
      <input name="date" type="date" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Who else turned up?</label>
    <div class="col-sm-10">
        @foreach ($log->User()->getLuggers() as $lugger)
        <label id="{{$lugger->id}}" class="checkbox-inline">
          <input name="other[]" type="checkbox">{{ucfirst(strtolower($lugger->firstName))}}
        </label>
        @endforeach
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Study Taken </label>
    <div class="col-sm-10">
      <input name="studyTaken" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Sharing (Accountability)</label>
    <div class="col-sm-10">
        <label class="radio-inline">
          <input name="sharing" value="yes" type="radio">Yes
        </label>
        <label class="radio-inline">
          <input name="sharing" value="no" type="radio">No
        </label>
      </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Venue</label>
    <div class="col-sm-10">
      <input name="venue" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Comments</label>
    <div class="col-sm-10">
      <input name="comments" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-2">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>

</form>
<script>
z = 0;
function report(x){
  z++;
  var y = document.getElementById(x);
  y.style.display='none';
  if (z > 1){
    window.location.reload();
  }
}
</script>
@stop
