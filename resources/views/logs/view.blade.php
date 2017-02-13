@extends('master')

@section('content')
<div class="row">
  <div class="col-sm-1">
    <h3>January</h3>
    @foreach ($users as $user)
    <a href="{{ url('/log/all/'.$user->id.'/1') }}">{{ $user->firstName }}</a>
    @endforeach
  </div>
  <div class="col-sm-1">
    <h3>February</h3>
    @foreach ($users as $user)
    <a href="{{ url('/log/all/'.$user->id.'/2') }}">{{ $user->firstName }}</a>
    @endforeach
  </div>
  <div class="col-sm-1">
    <h3>March</h3>
    @foreach ($users as $user)
    <a href="{{ url('/log/all/'.$user->id.'/3') }}">{{ $user->firstName }}</a>
    @endforeach
  </div>
  <div class="col-sm-1">
    <h3>April</h3>
    @foreach ($users as $user)
    <a href="{{ url('/log/all/'.$user->id.'/4') }}">{{ $user->firstName }}</a>
    @endforeach
  </div>
  <div class="col-sm-1">
    <h3>May</h3>
    @foreach ($users as $user)
    <a href="{{ url('/log/all/'.$user->id.'/5') }}">{{ $user->firstName }}</a>
    @endforeach
  </div>
  <div class="col-sm-1">
    <h3>June</h3>
    @foreach ($users as $user)
    <a href="{{ url('/log/all/'.$user->id.'/6') }}">{{ $user->firstName }}</a>
    @endforeach
  </div>
  <div class="col-sm-1">
    <h3>July</h3>
    @foreach ($users as $user)
    <a href="{{ url('/log/all/'.$user->id.'/7') }}">{{ $user->firstName }}</a>
    @endforeach
  </div>
  <div class="col-sm-1">
    <h3>August</h3>
    @foreach ($users as $user)
    <a href="{{ url('/log/all/'.$user->id.'/8') }}">{{ $user->firstName }}</a>
    @endforeach
  </div>
  <div class="col-sm-1">
    <h3>September</h3>
    @foreach ($users as $user)
    <a href="{{ url('/log/all/'.$user->id.'/9') }}">{{ $user->firstName }}</a>
    @endforeach
  </div>
  <div class="col-sm-1">
    <h3>October</h3>
    @foreach ($users as $user)
    <a href="{{ url('/log/all/'.$user->id.'/10') }}">{{ $user->firstName }}</a>
    @endforeach
  </div>
  <div class="col-sm-1">
    <h3>November</h3>
    @foreach ($users as $user)
    <a href="{{ url('/log/all/'.$user->id.'/11') }}">{{ $user->firstName }}</a>
    @endforeach
  </div>
  <div class="col-sm-1">
    <h3>December</h3>
    @foreach ($users as $user)
    <a href="{{ url('/log/all/'.$user->id.'/12') }}">{{ $user->firstName }}</a>
    @endforeach
  </div>
</div>

@stop
