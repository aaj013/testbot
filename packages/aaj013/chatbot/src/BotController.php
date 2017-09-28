<?php

namespace Aaj013\Chatbot;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BotController extends Controller
{
    //

    public function generateResponse($input = ''){
      $json_response=array('status'=>'false','input'=>'','reply'=>'');

      if($input!="")  $json_response['input']=$input;

      if($json_response['input']=="hello"){
        $json_response['reply']="hi user! I'm chatbot. You can talk to me!";
        $json_response['status']="true";
      }
      else if($json_response['input']!=""){
        $json_response['reply']="I can't follow what you said right now! Can you be more clear?";
        $json_response['status']="true";
      }

      return json_encode($json_response);
    }
}
