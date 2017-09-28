<?php

Route::middleware(['Aaj013\Chatbot\BotMiddleware'])->group(function () {
    Route::get('bot/{message}','Aaj013\Chatbot\BotController@generateResponse');
    Route::get('bot/','Aaj013\Chatbot\BotController@generateResponse');
});

Route::post('bot/','Aaj013\Chatbot\BotController@generateResponse');
