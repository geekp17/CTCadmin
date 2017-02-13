<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lugger;
use App\User;
use App\Jobs\MassInstagram;
use Illuminate\Support\Facades\Log;

class SendController extends Controller
{
    public function instagram(){
      Log::info('Instagram Function Hit');
      $username = 'geekp17';
      $password = 'R3tard3d@@#m1nd';
      $instagram = new \InstagramAPI\Instagram();
      $instagram->setUser($username, $password);
      $instagram->login();
      $luggers = new User();
      $luggers = $luggers->all();
      $message = 'Hey, Ami here. Can you please reply aye, if you got this DM';
      foreach ($luggers as $lugger) {
        dispatch(new MassInstagram($message, $lugger, $instagram));
      }
      Log::info('Instagram Function Done');
    }

    public function lol(){
      $username = 'geekp17';
      $password = 'R3tard3d@@#m1nd';
      $instagram = new \InstagramAPI\Instagram();
      $instagram->setUser($username, $password);
      $instagram->login();
      try{
        $usernameId = $instagram->getUsernameId('solome.vincent');
      } catch (InstagramAPI\InstagramException $e ){
        echo $e->getMessage();
      }

    }

}
