<?php

namespace App\Providers;

use App\Interface\ProductsServiceInt;
use App\Interface\UserServiceInt;
use App\Service\ProductsServiceImp;
use App\Service\UserServiceImp;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
     $this->app->bind(UserServiceInt::class, UserServiceImp::class);
     $this->app->bind(ProductsServiceInt::class, ProductsServiceImp::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
