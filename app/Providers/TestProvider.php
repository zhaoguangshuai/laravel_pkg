<?php

namespace App\Providers;

use App\Services\Test\ContractsServices;
use App\Services\Test\FacadeServices;
use App\Services\Test\TwoContractsServices;
use Illuminate\Support\ServiceProvider;

class TestProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //绑定一个单例
        $this->app->singleton('TestT', \App\Units\Test\Test::class);
        //将该服务注入到容器
        $this->app->singleton('TestService', FacadeServices::class);

        //绑定接口到实现
        $this->app->singleton(\App\Contracts\MyTest\IsTest::class, \App\Units\Test\Contracts::class);


        //绑定接口到实现
        $this->app->singleton(\App\Contracts\MyTest\IsTestContracts::class, ContractsServices::class);
        //绑定接口到实现2
        $this->app->singleton(\App\Contracts\MyTest\IsTestContracts::class, TwoContractsServices::class);

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
