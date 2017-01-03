@extends('master')

@section('content')
@foreach ($luggers as $lugger)
@php
$meet = date("n").'-'.date("y").'meet1';
$log1 = $lugger->Log()->where([
    ['lugger_id', '=', $lugger->id],
    ['meet', '=', $meet],
    ])->first();
$efforts1 = $log1->Effort()->get();
$effort1 = "";
foreach($efforts1 as $effort) {
  $effort1 = $effort1."\n".$effort->efforts;
}

$meet = date("n").'-'.date("y").'meet2';
$log2 = $lugger->Log()->where([
    ['lugger_id', '=', $lugger->id],
    ['meet', '=', $meet],
    ])->first();
$efforts2 = $log2->Effort()->get();;
$effort2 = "";
foreach($efforts2 as $effort) {
  $effort2 = $effort2."\n".$effort->efforts;
}

$meet = date("n").'-'.date("y").'meet3';
$log3 = $lugger->Log()->where([
    ['lugger_id', '=', $lugger->id],
    ['meet', '=', $meet],
    ])->first();
$efforts3 = $log3->Effort()->get();
$effort3 = "";
foreach($efforts3 as $effort) {
  $effort3 = $effort3."\n".$effort->efforts;
}


$meet = date("n").'-'.date("y").'meet4';
$log4 = $lugger->Log()->where([
    ['lugger_id', '=', $lugger->id],
    ['meet', '=', $meet],
    ])->first();
$efforts4 = $log4->Effort()->get();
$effort4 = "";
foreach($efforts4 as $effort) {
  $effort4 = $effort4."\n".$effort->efforts;
}

@endphp
<div class="row">
  <div class="col-sm-12">
    <h2>{{ucfirst(strtolower($lugger->firstName))}} - {{date("F")}}</h2>
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
      <th>{{$effort2}}</th>
      <th>{{$effort3}}</th>
      <th>{{$effort4}}</th>
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
    <tr>
      <th></th>
      <th><a href="{{ url('log/edit', [$log1->id]) }}" class="btn btn-primary" >Edit/Add</a></th>
      <th><a href="{{ url('log/edit', [$log2->id]) }}" class="btn btn-primary" >Edit/Add</a></th>
      <th><a href="{{ url('log/edit', [$log3->id]) }}" class="btn btn-primary" >Edit/Add</a></th>
      <th><a href="{{ url('log/edit', [$log4->id]) }}" class="btn btn-primary" >Edit/Add</a></th>
    </tr>
  </tbody>
</table>
@endforeach
@stop
