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
    public function edit($id){
      $log = new Log();
      $log = $log->where('id', $id)->first();
      return view('logs.add')->with('log', $log);
    }

    public function insert(Request $request){
      $log = new Log();
      $log = $log->where('id', $request->input('log_id'))->first();
      $effort = new Effort();
      $log->venue = $request->input('venue');
      if ($request->input('date') == '') {
        $log->date = NULL;
      } else {
        $log->date = $request->input('date');
      }
      $log->other = $request->input('other');
      $log->studyTaken = $request->input('studyTaken');
      $log->comments = $request->input('comments');
      $log->save();
      $effort->log_id = $request->input('log_id');
      $effort->efforts = $request->input('efforts');
      $effort->save();
      return redirect()->action('LogController@index');
    }

    public function index(){
      $user = Auth::user();
      $luggers = new Lugger();
      $luggers = $user->Lugger()->get();
      return view('logs.index')->with('luggers', $luggers);
    }

    public function create($lugger_id, $user_id){

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
