<?php

namespace App\Providers;

use App\Support\GlobalData\GlobalData;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('global-data', function ($app) {
            return new GlobalData($app->storagePath('app/data'));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
