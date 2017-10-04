<?php

namespace Aaj013\Chatbot;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BotController extends Controller
{
    //

    public function generateResponse(Request $request){
      $json_response=array('status'=>'false','input'=>'','reply'=>'');

      if($request->message!='') $json_response['input']=urlencode($request->message);

      //curl api.ai
      $cmd="curl 'https://api.api.ai/v1/query?v=20150910&query=".$json_response['input']."&lang=en&sessionId=aec07e28-6e19-4222-94b4-56a14c2fb20a&timezone=Asia/Kolkata' -H 'Authorization:Bearer ddc2d276d9e140bd9f13be94b5f29d28'";
      $api_response=shell_exec($cmd);
      return $api_response;


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
