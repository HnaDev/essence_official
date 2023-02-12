<?php

namespace App\Providers;
use App\Helper\Cart;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use View;

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
        Paginator::useBootstrap();
        // share data cart cho nhiều trang
        View::composer('*', function ($view) {
            $view->with('cart', new Cart);
        });
    }
}
