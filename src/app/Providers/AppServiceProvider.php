<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\SignupService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton(SignupService::class, function ($app) {
            return new SignupService();
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
