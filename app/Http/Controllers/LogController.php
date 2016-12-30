<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lugger;
use App\User;
use Auth;

class LogController extends Controller
{
    public function add(){
      $user = Auth::user();
      $lugger = new Lugger();
      $luggers = $user->Lugger()->get();
      return view('logs.add')->with('luggers', $luggers);
    }
}
