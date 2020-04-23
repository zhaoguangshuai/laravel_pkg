<?php

namespace App\Providers;

use App\Models\Amway\Amway;
use App\Observers\Admin\AmwayObserver;
use Illuminate\Support\ServiceProvider;

class ModelListerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Amway::observe(AmwayObserver::class);
    }
}
