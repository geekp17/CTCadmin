<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public function Lugger(){
      return $this->belongsTo('App\Lugger');
    }

    public function User(){
      return $this->belongsTo('App\User');
    }

    public function Effort(){
      return $this->hasMany('App\Effort');
    }
}
