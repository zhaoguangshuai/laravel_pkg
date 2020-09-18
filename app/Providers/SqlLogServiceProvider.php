<?php

namespace App\Providers;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\ServiceProvider;

class SqlLogServiceProvider extends ServiceProvider
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
        //if (app()->environment() == 'production') {
            sqllogger('==================== URL: ' . request()->fullUrl() . ' ====================');
            \DB::listen(function(QueryExecuted $queryExecuted) {
                $executeSql = str_replace(['%','?'],['%%','%s'],$queryExecuted->sql);
                $bindings = $queryExecuted->connection->prepareBindings($queryExecuted->bindings);
                $pdo = $queryExecuted->connection->getPdo();
                sqllogger(vsprintf($executeSql,array_map([$pdo,'quote'],$bindings)));
            });
        //}
    }
}
