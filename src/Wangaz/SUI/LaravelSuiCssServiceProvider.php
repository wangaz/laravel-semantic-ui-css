<?php

namespace Wangaz\SUI;

use Illuminate\Support\ServiceProvider;

class LaravelSuiCssServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // publish assets
        $this->publishes([
            __DIR__.'/src/assets' => public_path('vendor/laravel-semantic-ui-css')
        ], "assets");
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

