@extends('master')

@section('content')

 <table class="table">
   <thead>
     <tr>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Mobile No</th>
       <th>Address</th>
     </tr>
   </thead>
   <tbody>
     @foreach ($luggers as $lugger)
     <tr>
       <th>{{ $lugger->firstName}}</th>
       <th>{{ $lugger->lastName}}</th>
       <th>{{ $lugger->mobileNo}}</th>
       <th>{{ $lugger->address}}</th>
       <th><a class="btn btn-primary" href="{{action('LuggerController@edit', ['id' => $lugger->id])}}">Edit</a><a class="btn btn-danger" href="{{action('LuggerController@edit', ['id' => $lugger->id])}}">Delete</a></th>

     </tr>
      @endforeach
   </tbody>
 </table>

@stop
