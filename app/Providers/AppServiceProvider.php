<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Studio\Totem\Totem;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //studio/laravel-totem 该组件使用
        Totem::auth(function ($request) {
           return true;
        });
    }
}
