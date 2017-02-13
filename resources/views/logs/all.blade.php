@extends('master')

@section('content')
@foreach ($luggers as $lugger)
@php
  $meet1 = $month.'-'.date("y").'meet1';
  $log1 = $lugger->Log()->where([
    ['meet', '=', $meet1],
  ])->first();

  $efforts1 = $log1->Effort()->get();
  $effort1 = "";
  foreach($efforts1 as $effort) {
    $effort1 = $effort1."\n".$effort->efforts;
  }

  $meet2 = $month.'-'.date("y").'meet2';
  $log2 = $lugger->Log()->where([
    ['meet', '=', $meet2],
  ])->first();

  $efforts2 = $log2->Effort()->get();
  $effort2 = "";
  foreach($efforts2 as $effort) {
    $effort2 = $effort2."\n".$effort->efforts;
  }

  $meet3 = $month.'-'.date("y").'meet3';
  $log3 = $lugger->Log()->where([
    ['meet', '=', $meet3],
  ])->first();

  $efforts3 = $log3->Effort()->get();
  $effort3 = "";
  foreach($efforts3 as $effort) {
    $effort3 = $effort3."\n".$effort->efforts;
  }

  $meet4 = $month.'-'.date("y").'meet4';
  $log4 = $lugger->Log()->where([
    ['meet', '=', $meet4],
  ])->first();

  $efforts4 = $log4->Effort()->get();
  $effort4 = "";
  foreach($efforts4 as $effort) {
    $effort4 = $effort4."\n".$effort->efforts;
  }

  switch($month) {
    case "1" : $months = 'January';
    break;
    case "2" : $months = 'February';
    break;
    case "3" : $months = 'March';
    break;
    case "4" : $months = 'April';
    break;
    case "5" : $months = 'May';
    break;
    case "6" : $months = 'June';
    break;
    case "7" : $months = 'July';
    break;
    case "8" : $months = 'August';
    break;
    case "9" : $months = 'September';
    break;
    case "10" : $months = 'October';
    break;
    case "11" : $months = 'November';
    break;
    case "12" : $months = 'December';
    break;
  }

@endphp
<div class="row">
  <div class="col-sm-12">
    <h2>{{ucfirst(strtolower($lugger->firstName))}} - {{$months}}</h2>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th></th>
      <th>Meet 1</th>
      <th>Meet 2</th>
      <th>Meet 3</th>
      <th>Meet 4</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Effort Made to Meet</th>
      <th><pre>{{$effort1}}</pre></th>
      <th><pre>{{$effort2}}</pre></th>
      <th><pre>{{$effort3}}</pre></th>
      <th><pre>{{$effort4}}</pre></th>
    </tr>
    <tr>
      <th>Date</th>
      <th>{{$log1->date}}</th>
      <th>{{$log2->date}}</th>
      <th>{{$log3->date}}</th>
      <th>{{$log4->date}}</th>
    </tr>
    <tr>
      <th>Met With</th>
      <th>{{$log1->other}}</th>
      <th>{{$log2->other}}</th>
      <th>{{$log3->other}}</th>
      <th>{{$log4->other}}</th>
    </tr>
    <tr>
      <th>Venue</th>
      <th>{{$log1->venue}}</th>
      <th>{{$log2->venue}}</th>
      <th>{{$log3->venue}}</th>
      <th>{{$log4->venue}}</th>
    </tr>
    <tr>
      <th>Study Taken</th>
      <th>{{$log1->studyTaken}}</th>
      <th>{{$log2->studyTaken}}</th>
      <th>{{$log3->studyTaken}}</th>
      <th>{{$log4->studyTaken}}</th>
    </tr>
    <tr>
      <th>Sharing (Accountability)</th>
      <th>{{$log1->sharing}}</th>
      <th>{{$log2->sharing}}</th>
      <th>{{$log3->sharing}}</th>
      <th>{{$log4->sharing}}</th>
    </tr>
    <tr>
      <th>Comments</th>
      <th>{{$log1->comments}}</th>
      <th>{{$log2->comments}}</th>
      <th>{{$log3->comments}}</th>
      <th>{{$log4->comments}}</th>
    </tr>
  </tbody>
</table>
@endforeach
@stop
