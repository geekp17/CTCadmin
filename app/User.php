<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'mobileNo', 'address', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Lugger(){
      return $this->hasMany('App\Lugger');
    }

    public function Log(){
      return  $this->hasMany('App\Log');
    }

    public function getLuggers() {
      return $this->Lugger()->get();
    }

    public function routeNotificationForInstagram(){
      return $this->email;
    }

}
