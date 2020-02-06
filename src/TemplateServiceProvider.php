<?php

namespace Hcode\Template;

use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
   
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->publishes([
            __DIR__.'/public/sources' => $this->app->basePath() . '/public/sources',
        ]);

        $this->publishes([
            __DIR__.'/resources/views/home' => $this->app->basePath() . '/resources/views/home',
        ]);
       
        $this->publishes([
            __DIR__.'/resources/views/layouts' => $this->app->basePath() . '/resources/views/layouts',
        ]);
    }
}
