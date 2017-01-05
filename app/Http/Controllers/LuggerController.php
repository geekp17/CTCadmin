<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InsertLugger;
use App\Lugger;
use Auth;

class LuggerController extends Controller
{
    public function edit($id){
      $lugger = new Lugger();
      $lugger = $lugger->find($id)->first();
      return view('luggers.edit')->with('lugger', $lugger);
    }

    public function add(){
      return view('luggers.add');
    }

    public function insert(InsertLugger $request){
      $lugger = new Lugger();
      $lugger->firstName = strtoupper($request->input('firstName'));
      $lugger->lastName = strtoupper($request->input('lastName'));
      $lugger->mobileNo = strtoupper($request->input('mobileNo'));
      $lugger->dob = $request->input('dob');
      $lugger->address = strtoupper($request->input('address'));
      $lugger->user_id = $request->input('user_id');
      $lugger->instagram = $request->input('instagram');
      $lugger->save();
      $LogController = new LogController();
      $LogController->create($lugger->id, $lugger->user_id);
      return redirect()->action('LuggerController@add')->with('status', 'Yey, New lugger added!');
    }

    public function index(){
      $luggers = Auth::user()->Lugger()->get();
      return view('luggers.index')->with('luggers', $luggers);
    }
}
