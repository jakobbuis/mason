<?php

namespace Mason;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            \Mason\Bricks\BakeNews::class,
        ]);
    }
}
