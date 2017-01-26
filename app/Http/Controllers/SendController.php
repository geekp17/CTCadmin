<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lugger;
use App\Jobs\MassInstagram;

class SendController extends Controller
{
    public function instagram(){
      $username = 'fatmanfreedom';
      $password = '19940905Sa$';
      $instagram = new \InstagramAPI\Instagram();
      $instagram->setUser($username, $password);
      $instagram->login();
      $luggers = new Lugger();
      $luggers = $luggers->all();
      $message = 'Hey, Ami here';
      foreach ($luggers as $lugger) {
        dispatch(new MassInstagram($message, $lugger, $instagram));
      }
    }
}
