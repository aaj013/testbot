<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Aaj013\Chatbot\BotController@add');
Route::get('subtract/{a}/{b}', 'Aaj013\Chatbot\BotController@subtract');

Route::get('bot/{message}','Aaj013\Chatbot\BotController@generateResponse');
Route::get('bot/',function(){
  echo '';
});
Route::post('bot/','Aaj013\Chatbot\BotController@generateResponse');
