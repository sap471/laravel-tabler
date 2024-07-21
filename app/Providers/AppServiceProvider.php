<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
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
        /**
         * Share user data to all views
         */
        view()->composer('dashboard.*', function ($view) {
            if (Auth::check()) {
                view()->share('user', Auth::user());
            };
        });
    }
}