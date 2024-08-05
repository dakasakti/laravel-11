<?php

namespace App\Providers;

use App\Services\DummyApi;
use Illuminate\Support\ServiceProvider;

class DummyApiProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(DummyApi::class, function ($app) {
            return new DummyApi();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
