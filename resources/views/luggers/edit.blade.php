@extends('master')

@section('content')
<div class="row">
  <div class="small-12 small-centered columns">
      <h1>Hey Lugger!</h1>
  </div>
</div>

<div class="row">
  <div class="small-12 small-centered columns">
      <p>Hey, Just collecting some info for adminstrative purposes, kindly fill out the forms. <br>League of Lug Leaders</p>
  </div>
</div>

<form>
  <div class="row">
      <div class="small-3 columns">
          <label for="firstName" class="text-right middle">First Name </label>
      </div>
      <div class="small-9 columns">
        <input type="text" id="firstName">
  </div>
</form>
@stop
