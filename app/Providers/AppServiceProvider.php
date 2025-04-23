<?php

namespace App\Providers;

use App\View\Composers\GlobalDataComposer;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', GlobalDataComposer::class);

        RateLimiter::for('subscribe-to-newsletter', function (Request $request) {
            return Limit::perMinute(60)->by("{$request->email}-{$request->ip()}");
        });
    }
}
