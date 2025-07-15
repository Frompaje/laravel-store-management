<?php

namespace App\Providers;

use App\Service\UserServiceImp;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
     $this->app->bind(UserServiceImp::class, UserServiceImp::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
