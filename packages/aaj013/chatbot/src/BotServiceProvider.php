<?php

namespace Aaj013\Chatbot;

use Illuminate\Support\ServiceProvider;

class BotServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Aaj013\Chatbot\BotController');
        $this->loadViewsFrom(__DIR__.'/views', 'chatbot');
    }
}
