<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InsertClubber;
use App\Clubber;
use App\Lugger;

class ClubberController extends Controller
{
    public function add(){
      return view('clubbers.add');
    }

    public function insert(InsertClubber $request){
        $clubber = new Clubber();
        $clubber->firstName = strtoupper($request->input('firstName'));
        $clubber->lastName = strtoupper($request->input('lastName'));
        $clubber->mobileNo = strtoupper($request->input('mobileNo'));
        $clubber->dob = $request->input('dob');
        $clubber->address = strtoupper($request->input('address'));
        $clubber->lugger_id = $request->input('lugger_id');
        $clubber->save();
        return redirect()->action('ClubberController@add')->with('status', 'Yey, New clubber added!');
    }

    public function levelUp(Request $request){
      $clubber = new Clubber();
      $lugger = new Lugger();
      $clubber = $clubber->find($request->input('clubber_id'));
      $lugger->firstName = $clubber->firstName;
      $lugger->lastName = $clubber->lastName;
      $lugger->mobileNo = $clubber->mobileNo;
      $lugger->dob = $clubber->dob;
      $lugger->address = $clubber->address;
      $lugger->user_id = $request->input('user_id');
      $lugger->save();
      return redirect()->action('LuggerController@add')->with('status', 'Yey, New lugger added!');
    }
}
