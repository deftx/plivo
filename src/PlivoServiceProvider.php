<?php

namespace NotificationChannels\Plivo;

use Illuminate\Support\ServiceProvider;

class PlivoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->app->singleton(Plivo::class, function ($app) {
            return new Plivo(config('services.plivo'));
        });
    }
}
