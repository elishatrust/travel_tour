<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Routing\UrlGenerator;

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

    public function boot(UrlGenerator $url) : void
    {

        Paginator::useBootstrap();

        if (env('APP_ENV') == 'production') {
            $url->forceScheme('https');
        }
    }
}
