<?php

namespace App\Providers;

use App\Models\Sale;
use App\Models\SaleProduct;
use App\Models\User;
use App\Observers\SaleObserver;
use App\Observers\SaleProductObserver;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        Sale::observe(SaleObserver::class);
        SaleProduct::observe(SaleProductObserver::class);
    }
}
