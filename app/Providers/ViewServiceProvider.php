<?php


namespace App\Providers;


use App\Http\View\Composers\BrandComposer;
use App\Http\View\Composers\CategoryComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        // Using class based composers...
        View::composer('layouts.main', CategoryComposer::class);
        View::composer('black-shop.account-dashboard', CategoryComposer::class);
        View::composer('black-shop.account-password', CategoryComposer::class);
        View::composer('black-shop.account-edit-address', CategoryComposer::class);
        View::composer('black-shop.account-login', CategoryComposer::class);
        View::composer('black-shop.account-order-details', CategoryComposer::class);
        View::composer('black-shop.account-orders', CategoryComposer::class);
        View::composer('black-shop.account-profile', CategoryComposer::class);
        View::composer('black-shop.account-addresses', CategoryComposer::class);
        View::composer('black-shop.product', CategoryComposer::class);
        View::composer('black-shop.index', CategoryComposer::class);
        View::composer('black-shop.cart', CategoryComposer::class);
        View::composer('black-shop.checkout', CategoryComposer::class);
        View::composer('black-shop.shop-list', CategoryComposer::class);
//        View::composer('black-shop.shop-list', BrandComposer::class);
        View::composer('black-shop.about-us', CategoryComposer::class);
        View::composer('black-shop.account-login', CategoryComposer::class);
        View::composer('black-shop.terms-and-conditions', CategoryComposer::class);
        View::composer('black-shop.account-edit-address', CategoryComposer::class);
        View::composer('black-shop.account-order-success', CategoryComposer::class);
    }
}
