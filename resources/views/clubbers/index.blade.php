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
     @foreach ($clubbers as $clubber)
     <tr>
       <th>{{ ucfirst(strtolower($clubber->firstName))}}</th>
       <th>{{ ucfirst(strtolower($clubber->lastName))}}</th>
       <th>{{ $clubber->mobileNo}}</th>
       <th>{{ $clubber->address}}</th>
       <!-- <th><a class="btn btn-primary" href="{{action('LuggerController@edit', ['id' => $lugger->id])}}">Edit</a><a class="btn btn-danger" href="{{action('LuggerController@edit', ['id' => $lugger->id])}}">Delete</a></th> -->

     </tr>
      @endforeach
   </tbody>
 </table>

@stop
