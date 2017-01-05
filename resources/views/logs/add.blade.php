@extends('master')

@section('content')
<div class="row">
  <div class="col-sm-offset-2 col-sm-10">
      <h1>Lugger Log</h2>
  </div>
</div>
<form class="form-horizontal" method="post" action="{{ url('log\insert')}}">
  <input name="log_id" value="{{ $log->id }}" type="hidden">
  <div class="form-group">
    <label class="control-label col-sm-2">Lugger's Name</label>
    <div class="col-sm-10">
      <input class="form-control" name="" value="{{ ucfirst(strtolower($log->Lugger->firstName)) }}" readonly>
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
      <input name="date" type="date" class="form-control" value="{{$log->date}}">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Who else turned up?</label>
    <div class="col-sm-10">
        @foreach ( $log->User->getLuggers() as $lugger)
        <label  class="checkbox-inline">
          <input name="other[]" type="checkbox" value="{{ucfirst(strtolower($lugger->firstName))}}">{{ucfirst(strtolower($lugger->firstName))}}
        </label>
        @endforeach
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Study Taken </label>
    <div class="col-sm-10">
      <input name="studyTaken" type="text" class="form-control" value="{{ $log->studyTaken}}">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Sharing (Accountability)</label>
    <div class="col-sm-10">
      @if (is_null($log->sharing))
        <label class="radio-inline">
          <input name="sharing" value="yes" type="radio">Yes
        </label>
        <label class="radio-inline">
          <input name="sharing" value="no" type="radio">No
        </label>
      @else
        @if ($log->sharing == "yes")
        <label class="radio-inline">
          <input name="sharing" value="yes" type="radio" checked="checked">Yes
        </label>
        <label class="radio-inline">
          <input name="sharing" value="no" type="radio">No
        </label>
        @else
        <label class="radio-inline">
          <input name="sharing" value="yes" type="radio">Yes
        </label>
        <label class="radio-inline">
          <input name="sharing" value="no" type="radio"checked="checked">No
        </label>
        @endif
      @endif
      </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Venue</label>
    <div class="col-sm-10">
      <input name="venue" type="text" class="form-control" value="{{$log->venue}}">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2">Comments</label>
    <div class="col-sm-10">
      <input name="comments" type="text" class="form-control" value="{{$log->comments}}">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-2">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>

</form>
@stop
