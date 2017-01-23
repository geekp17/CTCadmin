<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstagramController extends Controller
{
    public function send(){
      $username = 'fatmanfreedom';
      $password = '19940905Sa$';
      $instagram = new \InstagramAPI\Instagram();
      $instagram->setUser($username, $password);
      $instagram->login();
      $usernameId = $instagram->getUsernameId('colomboteenclub');
      //$sendTo = array(645642137);
      $dm = $instagram->direct_message('645642137', 'hello');
    }
}
