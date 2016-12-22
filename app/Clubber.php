<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clubber extends Model
{
    public function Lugger(){
      return $this->belongsTo('App\Lugger');
    }
}
