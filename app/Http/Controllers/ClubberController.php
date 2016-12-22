<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InsertClubber;
use App\Clubber;

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
    }
}
