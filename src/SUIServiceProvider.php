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
            __DIR__.'/assets' => public_path('/assets/semantic-ui/css'),
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
