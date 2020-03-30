<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Yansongda\Pay\Pay;

class PyaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('alipay', function () {
            return Pay::alipay();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
