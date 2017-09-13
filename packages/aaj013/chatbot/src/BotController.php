<?php

namespace Aaj013\Chatbot;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BotController extends Controller
{
    //
    public function add($a, $b){
      $result = $a + $b;
	    return view('chatbot::add', compact('result'));
    }

    public function subtract($a, $b){
    	echo $a - $b;
    }

    public function generateResponse($msg,Request $request){
      $input=$response='';
      if($msg!=''){
        $input=$msg;
      }
      if($request->input!=''){
        $input=$request->input;
      }
      echo "Input: ".$input;

      if($input=='hello'){
        $response="hi user! I'm chatbot. You can talk to me!";
      }
      echo "<br/>Response: ".$response;
    }
}
