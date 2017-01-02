<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lugger;
use App\User;
use App\Log;
use Auth;
use App\Effort;
use App\Request\InsertLog;

class LogController extends Controller
{
    public function add(){
      $user = Auth::user();
      $lugger = new Lugger();
      $luggers = $user->Lugger()->get();
      return view('logs.add')->with('luggers', $luggers);
    }

    public function insert(Request $request){
      $log = new Log();
      $effort = new Effort();
      $log->user_id = Auth::id();
      $log->lugger_id = $request->input('lugger_id');
      $log->venue = $request->input('venue');
      $log->date = $request->input('date');
      $log->other = $request->input('other');
      $log->studyTaken = $request->input('studyTaken');
      $log->comments = $request->input('comments');
      $log->save();
      $effort->log_id = $log->id;
      $effort->efforts = $request->input('efforts');
      $effort->save();
    }

    public function index(){
      $user = Auth::user();
      $luggers = new Lugger();
      $luggers = $user->Lugger()->get();
      return view('logs.index')->with('luggers', $luggers);
    }

    public function create($user_id, $lugger_id){

      for ($i = 1; $i<13; $i++) {
        for ($k = 1; $k<5; $k++){
          $log = new Log();
          $log->user_id = $user_id;
          $log->lugger_id = $lugger_id;
          $log->meet = "$i".'-'.date("y").'meet'."$k";
          $log->save();
        }
      }


    }
}
