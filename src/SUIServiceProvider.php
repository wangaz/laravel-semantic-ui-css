<?php

namespace SUI;

use Illuminate\Support\ServiceProvider;

class SUIServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // publish Semantic UI
        $this->publishes([
            __DIR__.'/assets/semantic-ui' => public_path('/assets/semantic-ui/css'),
            __DIR__.'/assets/jquery' => public_path('/assets/semantic-ui/jquery'),
        ], 'public');
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
