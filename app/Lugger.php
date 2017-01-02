<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugger extends Model
{
    public function Clubber(){
      return $this->hasMany('App\Clubber');
    }

    public function User(){
      return $this->belongsTo('App\User');
    }
    public function Log(){
      return $this->HasMany('App\Log');
    }
}
