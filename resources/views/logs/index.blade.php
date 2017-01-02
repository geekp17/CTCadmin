@extends('master')

@section('content')
@foreach ($luggers as $lugger)
@php
$meet = date("n").'-'.date("y").'meet1';
$log1 = $lugger->Log()->where([
    ['lugger_id', '=', $lugger->id],
    ['meet', '=', $meet],
    ])->first();

$meet = date("n").'-'.date("y").'meet2';
$log2 = $lugger->Log()->where([
    ['lugger_id', '=', $lugger->id],
    ['meet', '=', $meet],
    ])->first();

$meet = date("n").'-'.date("y").'meet3';
$log3 = $lugger->Log()->where([
    ['lugger_id', '=', $lugger->id],
    ['meet', '=', $meet],
    ])->first();

$meet = date("n").'-'.date("y").'meet4';
$log4 = $lugger->Log()->where([
    ['lugger_id', '=', $lugger->id],
    ['meet', '=', $meet],
    ])->first();
var_dump($log4->toArray());
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
      <th></th>
      <th></th>
      <th></th>
      <th></th>
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
      <th>{{$log1->studyTaken}}</th>
      <th>{{$log2->studyTaken}}</th>
      <th>{{$log3->studyTaken}}</th>
      <th>{{$log4->studyTaken}}</th>
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
      <th><a href="#meet1" class="btn btn-primary" >Edit</a></th>
      <th><a href="#meet2" class="btn btn-primary" >Edit</a></th>
      <th><a href="#meet3" class="btn btn-primary" >Edit</a></th>
      <th><a href="#meet4" class="btn btn-primary" >Edit</a></th>
    </tr>
  </tbody>
</table>
@endforeach
@stop
