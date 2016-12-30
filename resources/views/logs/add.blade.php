@extends('master')

@section('content')
<div class="row">
  <div class="col-sm-offset-2 col-sm-10">
      <h1>Lugger Log</h2>
  </div>
</div>
<form class="form-horizontal">

  <div class="form-group">
    <label class="control-label col-sm-2">Lugger's Name</label>
    <div class="col-sm-10">
      <select onchange="report(this.value)" class="form-control" name="lugger_id">
        <option></option>
        @foreach ($luggers as $lugger)
        <option value="{{$lugger->id}}">{{ucfirst(strtolower($lugger->firstName))}}</option>
        @endforeach
      </select>
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
        @foreach ($luggers as $lugger)
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
          <input name="sharing" value="yes" type="radio">No
        </label>
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
