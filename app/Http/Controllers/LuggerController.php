<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuggerController extends Controller
{
    public function edit(){
      return view('luggers.edit');
    }

    public function add(){
      return view('luggers.add');
    }
}
