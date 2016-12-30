<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use vendor\mgp25\instagramphp\src\Instagram;

class InstagramProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('vendor\mgp25\instagramphp\src\Instagram', function ($app){
          return new Instagram();
        });
    }
}
